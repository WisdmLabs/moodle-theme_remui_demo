<?php
// NOTE :::::::::::::::
// If new category is added on demo landing page, make sure to add new tag on edwiser.org FluentCRM.
// Also add the ID of newly created instance into the $demos array.


class InstanceManager {
    private $_allInstances;
    private $_delInstances;
    private $jsonfile = '/var/www/instances.json';
    private $jsonfiledel = '/var/www/instancesdeleted.json';
    private $destroyPeriod = 1 * 2 * 60 * 60; // Day * Hours * Mins * seconds
    private $demoTypesConfig = '/var/www/demo_types.json';

    function __construct() {
        $this->_allInstances = $this->get_instances_from_json($this->jsonfile);
        $this->_delInstances = $this->get_instances_from_json($this->jsonfiledel);
    }

    /**
     * Return File - Instance data
     */
    function get_instances_from_json($file) {
        return json_decode(file_get_contents($file), true);
    }

    /**
     * Print JSON Data
     */
    function print_instances() {
        echo "<pre>";
        print_r($this->_allInstances);
        print_r($this->_delInstances);
        echo "</pre>";
    }

    /**
     * Insert into instance json file the data
     */
    function write_instance_to_json($file, $data) {
        file_put_contents($file, json_encode($data));
    }

    /**
     * Validate current request.
     *
     * @return boolean
     */
    function is_authentic() {
        if (defined('CLI_SCRIPT')) {
            return true;
        }
        if (!isset($_SERVER['REMOTE_ADDR']) || $_SERVER['REMOTE_ADDR'] == "0:0:0:0") {
            return false;
        }
        return true;
    }

    /**
     * Check whether current user is having any existing instance.
     *
     * @param string $ip IP address
     * @param string $demo_type Demo type to check for
     *
     * @return void
     */
    function existing($ip, $demo_type = null) {
        // return false;
        if ($ip == 'CLI') {
            return false;
        }
        
        foreach ($this->_allInstances['inuse'] as $instance) {
            if ($ip == "223.233.85.136") {
                return false;
            }
            
            if (isset($instance['ip']) && $instance['ip'] == $ip) {
                // If demo_type is specified, check if it matches
                if ($demo_type !== null) {
                    $instance_type = isset($instance['type']) ? $instance['type'] : 'remui';
                    if ($instance_type === $demo_type) {
                        return $instance; // IP matches and demo type matches
                    }
                } else {
                    // No demo type specified, return the instance
                    return $instance;
                }
            }
        }
        return false;
    }

    /**
     * This will return existing unused demo details to user.
     * along with creating new instance.
     */
    function retrieve_fresh_instance($email, $layout_name="default", $tagid = -1, $demo_type = "remui") {
        if (!$this->is_authentic()) {
            return [
                'invalid' => true,
                'message' => 'We cannot create instance for you. DOS attack detected.',
                'instanceurl' => 'demo.tryremui.edwiser.org/createinstance.php',
            ];
        }
        $ip = defined('CLI_SCRIPT') ? 'CLI' : $_SERVER['REMOTE_ADDR'];
        // Get current time for new instance creation.
        $timecreation = time();

	// Get demo type configuration and validate
        $demo_config = $this->get_demo_type_config($demo_type);
        if (!$demo_config) {
            // If the specified demo type is not available, fallback to remui
            error_log("Demo type '$demo_type' not found in configuration, falling back to 'remui'");
            $demo_type = "remui";
            $demo_config = $this->get_demo_type_config($demo_type);
            
            // If remui is also not available, return error
            if (!$demo_config) {
                return [
                    'invalid' => true,
                    'message' => 'No valid demo type configuration found.',
                    'instanceurl' => 'demo.tryremui.edwiser.org/createinstance.php',
                ];
            }
        }

        // Demo Tag id on fluentcrm from configuration
        $demos = $demo_config['layout_tags'];

        // Generate data for requesting user.
        // Here we are fetching an available instance of the same type and move it to in use array.
        if ($existingdata = $this->existing($ip, $demo_type)) {
            // Record Demo type $layout_name to newly received $existingdata['instanceurl']
            // making a curl request to sent layout_name to theme
            // Get token from demo type configuration
            $token = DemoConfigLoader::getToken($demo_type);
            $functionName = 'theme_remui_external_data_receiver';
            // Data to be sent in the POST request
            $data = [
                'blocklayout' => $layout_name,
                'email' => $email
            ];

            $requestParams = [
                'wstoken' => $token,
                'wsfunction' => $functionName,
                'moodlewsrestformat' => 'json',
                'externaldata' => json_encode($data)
            ];

            // URL of the web service
            $url ='http://'.$existingdata['instanceurl'].'/webservice/rest/server.php';

            // Initialize cURL session
            $ch = curl_init();

            // Set the URL and other necessary options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($requestParams));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
            ]);

            // Set timeout options to prevent blocking
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // 10 seconds connection timeout
            curl_setopt($ch, CURLOPT_TIMEOUT, 30); // 30 seconds total timeout
            curl_setopt($ch, CURLOPT_NOSIGNAL, 1); // Ignore signals to prevent blocking

            // Execute the POST request
            $response = curl_exec($ch);

            // Check for cURL errors
            if ($response === false) {
		$curlError = curl_error($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                // Log the error but don't block the flow
                error_log("cURL Error for existing instance {$existingdata['instanceurl']}: $curlError (HTTP Code: $httpCode)");

                // Set a default response to continue flow
                $response = null;
            }

            // Close cURL session
            curl_close($ch);

            return $existingdata;
        } else {
            // Find an available instance of the requested demo type
            $available_instance = $this->find_available_instance_by_type($demo_type);
            
            if (!$available_instance) {
                // No available instance of this type, create a new one
                $new_instance = $this->add_new_instance_by_type($demo_type);
                if (!$new_instance) {
                    return [
                        'invalid' => true,
                        'message' => 'Failed to create new instance of type: ' . $demo_type,
                        'instanceurl' => 'demo.tryremui.edwiser.org/createinstance.php',
                    ];
                }
                // Find the newly created instance
                $available_instance = $this->find_available_instance_by_type($demo_type);
                if (!$available_instance) {
                    return [
                        'invalid' => true,
                        'message' => 'Failed to find newly created instance of type: ' . $demo_type,
                        'instanceurl' => 'demo.tryremui.edwiser.org/createinstance.php',
                    ];
                }
            }
            
            $existingdata = $available_instance['instance'];
            $instance_key = $available_instance['key'];
            
            $existingdata['email'] = $email;
            $existingdata['timecreation'] = $timecreation;
            $existingdata['timedeletion'] = $timecreation + $this->destroyPeriod;
            $existingdata['ip'] = $ip;
            $existingdata['lists'] = array(10); // On FluentCRM "Edwiser RemUI Leads" list id is 10.
            // Use default tag if layout_name is not found in configuration
            $tag_to_use = ($tagid == -1) ?
                (isset($demos[$layout_name]) ? $demos[$layout_name] : $demos['default']) :
                $tagid;
            $existingdata['tags'] = array($tag_to_use);
            $existingdata['type'] = $demo_type;
            $this->_allInstances['inuse'][] = $existingdata;

            $this->erd_record_users($existingdata);

            // Remove the instance from available instances
            unset($this->_allInstances['instances'][$instance_key]);

            $demoname = $this->generate_demo_name('tryremui'.$timecreation);
            $demourl = "instances.tryremui.edwiser.org/".$demoname;

            // Record Demo type $layout_name to newly received $existingdata['instanceurl']
            // making a curl request to sent layout_name to theme
            // Get token from demo type configuration
            $token = DemoConfigLoader::getToken($demo_type);
            $functionName = 'theme_remui_external_data_receiver';
            // Data to be sent in the POST request
            $data = [
                'blocklayout' => $layout_name,
                'email' => $email,
            ];

            $requestParams = [
                'wstoken' => $token,
                'wsfunction' => $functionName,
                'moodlewsrestformat' => 'json',
                'externaldata' => json_encode($data)
            ];


            // URL of the web service
            $url ='http://'.$existingdata['instanceurl'].'/webservice/rest/server.php';

            // Initialize cURL session
            $ch = curl_init();

            // Set the URL and other necessary options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($requestParams));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
            ]);

            // Set timeout options to prevent blocking
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // 10 seconds connection timeout
            curl_setopt($ch, CURLOPT_TIMEOUT, 30); // 30 seconds total timeout
            curl_setopt($ch, CURLOPT_NOSIGNAL, 1); // Ignore signals to prevent blocking


            // Execute the POST request
            $response = curl_exec($ch);

            // Check for cURL errors
            if ($response === false) {
                $curlError = curl_error($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                // Log the error but don't block the flow
                error_log("cURL Error for new instance {$existingdata['instanceurl']}: $curlError (HTTP Code: $httpCode)");

                // Set a default response to continue flow
                $response = null;
            }

            // Close cURL session
            curl_close($ch);

            // $this->erd_record_layout($demourl, $layout_name);

            // Add a new instance of the same type to replace the one we just used
            $this->add_new_instance_by_type($demo_type);

            // Reindex the instances array to maintain sequential keys
            $this->_allInstances['instances'] = array_values($this->_allInstances['instances']);

            $this->_allInstances['restartserver'] = true;

            $this->write_instance_to_json($this->jsonfile, $this->_allInstances);

            //$this->create_new_instance($newdata['instancename'], $demo_type);

        }

        return $existingdata;
    }

    function erd_record_layout($demourl, $layout_name, $demo_type = "remui") {

	    // Web service token from demo type configuration.
	    $token = DemoConfigLoader::getToken($demo_type);

        // Function Name to be called.
	    $functionname = 'theme_remui_set_demo_layouttype';

	    // Data to be sent in the POST request
	    $data = [
		    'blocklayout' => $layout_name,
	    ];

	    // URL of the web service
	    $url ='http://'.$demourl.'/webservice/rest/server.php?wstoken='.$token.'&wsfunction='.$functionname;

        $result = $this->sendCurlRequest($url, http_build_query($data), 'application/x-www-form-urlencoded');

    }

    // Send Curl requests function.
    function sendCurlRequest($url, $payload, $contenttype = 'application/json')
    {
        $ch = curl_init($url);

        $useragent = 'Chrome/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        // curl_setopt($ch, CURLOPT_REFERER, 'https://demo.tryremui.edwiser.org');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: '. $contenttype
        ));

        $result = curl_exec($ch);

        if ($result === false) {
            $error = curl_error($ch);
            // Log the error or handle it appropriately
            error_log("cURL error: $error");
        }

        curl_close($ch);

        return $result;
    }

    function erd_record_users($existingData)
    {

        $payload = json_encode($existingData);

        $fluentCrmUrl = "https://edwiser.org/?fluentcrm=1&route=contact&hash=c099cc8b-0e8f-401a-b86f-0003379138b0";

        $result = $this->sendCurlRequest($fluentCrmUrl, $payload);

        // $remUiDemoDetailsUrl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
        // $result = $this->sendCurlRequest($remUiDemoDetailsUrl, $payload);
    }

    /**
     * Load demo type configuration
     */
    function get_demo_type_config($demo_type) {
        // Use centralized config loader if available, otherwise fallback to direct file read
        if (class_exists('DemoConfigLoader')) {
            return DemoConfigLoader::getDemoTypeConfig($demo_type);
        }
        
        // Fallback to direct file read (for backward compatibility)
        if (!file_exists($this->demoTypesConfig)) {
            return null;
        }

        $config = json_decode(file_get_contents($this->demoTypesConfig), true);
        return isset($config[$demo_type]) ? $config[$demo_type] : null;
    }

    /**
     * Find an available instance of a specific demo type
     */
    function find_available_instance_by_type($demo_type) {
        if (!isset($this->_allInstances['instances']) || empty($this->_allInstances['instances'])) {
            return null;
        }
        
        // Find the first available instance of the specified type
        foreach ($this->_allInstances['instances'] as $key => $instance) {
            $instance_type = isset($instance['type']) ? $instance['type'] : 'remui';
            if ($instance_type === $demo_type) {
                return array('instance' => $instance, 'key' => $key);
            }
        }
        
        return null;
    }

    /**
     * Add a new instance of a specific type to the instances array
     */
    function add_new_instance_by_type($demo_type) {
        $demo_config = $this->get_demo_type_config($demo_type);
        if (!$demo_config) {
            return false;
        }
        
        $demoname = $this->generate_demo_name('tryremui' . time());
        $demourl = "instances.tryremui.edwiser.org/" . $demoname;
        
        $newdata = [
            "email" => 'test@xyz.com',
            "instancename" => $demoname,
            "instanceurl" => $demourl,
            "timecreation" => '00000000',
            "timedeletion" => '00000000',
            "type" => $demo_type
        ];
        
        $this->_allInstances['instances'][] = $newdata;
        
        return $newdata;
    }

    /**
     * Generate New Name for demo.
     * Used sha256 to generate unique hashcode each time for new demo name.
     */
    function generate_demo_name($str){
        // $str = "tryremui0".time();
	$stringlimit = 6;
	$flag = true;
	$dname = substr(hash("sha256", $str), 0, $stringlimit);

	for($i = 0; $i < $stringlimit; $i++) {
		if (!is_numeric($dname[$i])) {
			$flag = false;
			if ($dname[$i] == 'e') {
				$randomChar = chr(rand(97,122));
				$dname[$i] = $randomChar;
			}
		}
	}

	if ($flag) {
		// $randomIndex = rand(0, 5);
		$randomChar = chr(rand(97,122));

		$dname[0] = $randomChar;
	}

	return $dname;
    }

    /**
     * Create New Instance with given name.
     */
    function create_new_instance($name, $demo_type = "remui") {
        // $cmd = "service nginx reload";
        // exec($cmd, $output, $code);

        $cmd = "bash /var/www/manage_demo_hosts.sh create " . $name . " " . $demo_type . " > /dev/null &";
	    exec($cmd, $output, $code);
    }

    /**
     * Destroy instances for current time.
     */
    function destroy_instances_by_time() {
        $currTime = time();

        foreach ($this->_allInstances['inuse'] as $key => $instance) {
            if ($currTime >= $instance['timedeletion']) {
                // $this->delete_instance($instance['instancename']);
                // sleep(15);
                // if (!is_dir("/var/www/instances/".$instance['instancename'])) {
                $this->_delInstances['deleted'][] = $instance;
                unset($this->_allInstances['inuse'][$key]);
                // }
            }
        }
        // error_log("\n".'New Error ['. date("Y-m-d H:i:s"). '] : '.print_r($this->_allInstances, 1), 3, dirname(__FILE__).'/wdm_error.log');
        $this->write_instance_to_json($this->jsonfile, $this->_allInstances);
        $this->write_instance_to_json($this->jsonfiledel, $this->_delInstances);
    }

    /**
     * Delete instance by instance name with shell script.
     */
    function delete_instance($name, $demo_type = "remui") {
        // error_log("\n".'Error ['. date("Y-m-d H:i:s"). '] : '.print_r($name, 1), 3, dirname(__FILE__).'/wdm_error.log');
        $cmd = "bash /var/www/manage_demo_hosts.sh delete " . $name . " " . $demo_type . " > /dev/null";
        exec($cmd);
    }

    /**
     * Check if server restart semaphore is set.
     */
    function restart_server() {
        return $this->_allInstances['restartserver'];
    }

    /**
     * Reset Server Semaphore
     */
    function reset_server_semaphore() {
        $this->_allInstances['restartserver'] = false;

        $this->write_instance_to_json($this->jsonfile, $this->_allInstances);
    }

}
