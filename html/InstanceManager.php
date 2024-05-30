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
     *
     * @return void
     */
    function existing($ip) {
        if ($ip == 'CLI') {
            return false;
        }
        foreach ($this->_allInstances['inuse'] as $instance) {
		
            if ($ip == "223.233.82.100") {
                return false;
            }
            if (isset($instance['ip']) && $instance['ip'] == $ip) {
                return $instance;
            }
        }
        return false;
    }

    /**
     * This will return existing unused demo details to user.
     * along with creating new instance.
     */
    function retrieve_fresh_instance($email, $demotype="classic", $tagid = -1) {
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

	    // Demo Tag id on fluentcrm.
        $demos = [
            "classic"=> 21,
            "school"=> 22,
            "university"=> 24,
            "corporate" => 23
        ];

        // Generate data for requesting user.
        // Here we are fetching 0th index existing demo and move it to in use array.
        if ($existingdata = $this->existing($ip)) {
            return $existingdata;
        } else {
            $existingdata = $this->_allInstances['instances'][0];
            $existingdata['email'] = $email;
            $existingdata['timecreation'] = $timecreation;
            $existingdata['timedeletion'] = $timecreation + $this->destroyPeriod;
            $existingdata['ip'] = $ip;
            $existingdata['lists'] = array(10); // On FluentCRM "Edwiser RemUI Leads" list id is 10.
            $existingdata['tags'] = array(($tagid == -1)? $demos[$demotype] : $tagid);
            $this->_allInstances['inuse'][] = $existingdata;
	        
            $this->erd_record_users($existingdata);

            // Delete 0th Index from existing instances.
            unset($this->_allInstances['instances'][0]);

            $demoname = $this->generate_demo_name('tryremui'.$timecreation);
            $demourl = "instances.tryremui.edwiser.org/".$demoname;
	
            // Record Demo type $demotype to newly received $existingdata['instanceurl']
            // making a curl request to sent demotype to theme
            $token = 'a277139e7f0926487f693e8171a348ee';
            $functionName = 'theme_remui_set_demo_layouttype';
            // Data to be sent in the POST request
            $postData = [
                'blocklayout' => $demotype,
            ];

            // URL of the web service
            $url ='https://'.$existingdata['instanceurl'].'/webservice/rest/server.php?wstoken='.$token.'&wsfunction='.$functionName;

            // Initialize cURL session
            $ch = curl_init();

            // Set the URL and other necessary options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
            ]);

            // Execute the POST request
            $response = curl_exec($ch);

            // Check for cURL errors
            if ($response === false) {
                echo 'cURL Error: ' . curl_error($ch);
            }

            // Close cURL session
            curl_close($ch);

            // $this->erd_record_layout($demourl, $demotype);

            $newdata = [
                "email" => 'test@xyz.com',
                "instancename" => $demoname,
                "instanceurl" => $demourl,
                "timecreation" => '00000000',
                "timedeletion" => '00000000'
            ];

            $this->_allInstances['instances'][] = $newdata;

            $this->_allInstances['instances'] = array_values($this->_allInstances['instances']);

            $this->_allInstances['restartserver'] = true;

            $this->write_instance_to_json($this->jsonfile, $this->_allInstances);

            $this->create_new_instance($newdata['instancename']);

        }
        
        return $existingdata;
    }

    function erd_record_layout($demourl, $demotype) {
	
	    // Web service token.
	    $token = 'a277139e7f0926487f693e8171a348ee';

        // Function Name to be called.
	    $functionname = 'theme_remui_set_demo_layouttype';

	    // Data to be sent in the POST request
	    $data = [
		    'blocklayout' => $demotype,
	    ];

	    // URL of the web service
	    $url ='https://'.$demourl.'/webservice/rest/server.php?wstoken='.$token.'&wsfunction='.$functionname;

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

        $remUiDemoDetailsUrl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
        $result = $this->sendCurlRequest($remUiDemoDetailsUrl, $payload);
    }
    // function erd_record_users($existingdata) {

    //     $payload = json_encode($existingdata);
    //     $requesturl = "https://edwiser.org/?fluentcrm=1&route=contact&hash=363ef54c-ed6c-4b6e-8290-49eb1729c7e6";
    //     // Create a new cURL resource
    //     $curl = curl_init();

    //     if (!$curl) {
    //         die("Couldn't initialize a cURL handle");
    //     }

    //     $ch = curl_init($requesturl);
    //     $config['useragent'] = 'Chrome/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

    //     curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);
    //     curl_setopt($ch, CURLOPT_REFERER, 'https://demo.tryremui.edwiser.org');
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    //     // Set HTTP Header for POST request
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //         'Content-Type: application/json',
    //         'Content-Length: ' . strlen($payload))
    //     );

    //     // Submit the POST request
    //     $result = curl_exec($ch);

    //     // Close cURL session handle
    //     curl_close($ch);

    //     // Sending it to edwiser
    //     $requesturl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
    //     $ch = curl_init($requesturl);

    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//     curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);
    //     curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        
    //     // Set HTTP Header for POST request
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //         'Content-Type: application/json',
    //         'Content-Length: ' . strlen($payload))
    //     );
        
    //     // Submit the POST request
    //     $result = curl_exec($ch);

    //     // Close cURL session handle
    //     curl_close($ch);
    // }
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
    function create_new_instance($name) {
        // $cmd = "service nginx reload";
        // exec($cmd, $output, $code);

        $cmd = "bash /var/www/manage_remui_hosts.sh create " . $name . " > /dev/null &";
	    exec($cmd, $output, $code);
    }

    /**
     * Destroy instances for current time.
     */
    function destroy_instances_by_time() {
        $currTime = time();
	echo $currTime;
        foreach ($this->_allInstances['inuse'] as $key => $instance) {
            if ($currTime >= $instance['timedeletion']) {
                $this->delete_instance($instance['instancename']);
                $this->_delInstances['deleted'][] = $instance;
                unset($this->_allInstances['inuse'][$key]);
            }
        }
        $this->write_instance_to_json($this->jsonfile, $this->_allInstances);
        $this->write_instance_to_json($this->jsonfiledel, $this->_delInstances);
    }

    /**
     * Delete instance by instance name with shell script.
     */
    function delete_instance($name) {
        $cmd = "sudo bash /var/www/manage_remui_hosts.sh delete " . $name . "  > /dev/null";
        exec($cmd);

        $cmd = "sudo service nginx restart > /dev/null";
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
