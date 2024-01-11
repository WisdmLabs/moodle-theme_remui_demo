<?php

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
    function retrieve_fresh_instance($email) {
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
            $this->_allInstances['inuse'][] = $existingdata;
	    $this->erd_record_users($existingdata);
            // Delete 0th Index from existing instances.
            unset($this->_allInstances['instances'][0]);

            $demoname = $this->generate_demo_name('tryremui'.$timecreation);
            $demourl = "instances.tryremui.edwiser.org/".$demoname;

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

            // exec("php7.4 createnew.php ".$newdata['instancename']);
        }

        return $existingdata;
    }
function erd_record_users($existingdata) {

    $payload = json_encode($existingdata);
   // $requesturl = "https://wordpress-1154182-4019807.cloudwaysapps.com/wp-json/demo/v1/remui_demo_details";
   // $requesturl = "https://webhook.site/8453f709-24c7-444f-8f72-30d16113d2ad";
    //$requesturl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
    // $requesturl = "https://hooks.zapier.com/hooks/catch/804349/38wc6t1/";
	//    $requesturl = "https://webhook.site/42f25f2b-aade-4580-a6b8-5087ab697315";
    $requesturl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
    // Create a new cURL resource
    $curl = curl_init();

    if (!$curl) {
        die("Couldn't initialize a cURL handle");
    }

    $ch = curl_init($requesturl);
    $config['useragent'] = 'Chrome/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

    curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);
    curl_setopt($ch, CURLOPT_REFERER, 'https://demo.tryremui.edwiser.org');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    // Set HTTP Header for POST request
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload))
    );
    // Submit the POST request
    $result = curl_exec($ch);
    // error_log($result);
    // error_log("\n".'Error ['. date("Y-m-d H:i:s"). '] : '.print_r($result, 1), 3, '/var/www/demo/html/wdm_error.log');
    // Close cURL session handle
    curl_close($ch);

    //check the result
    //print_r($result);
    //Sending it to edwiser
    // $requesturl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
    $requesturl = "https://webhook.site/42f25f2b-aade-4580-a6b8-5087ab697315";
    $ch = curl_init($requesturl);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    // Set HTTP Header for POST request
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload))
    );
    // Submit the POST request
    $result = curl_exec($ch);

    // Close cURL session handle
    curl_close($ch);

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
