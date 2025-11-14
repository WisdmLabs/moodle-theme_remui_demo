<?php
@ini_set('display_errors', 1); /* enable or disable public display of errors (use 'On' or 'Off') */
@ini_set('error_reporting', E_ALL ^ E_NOTICE); /* the php parser to  all errors, excreportept notices.  */

function erd_record_users($existingdata) {

	if (empty($existingdata)) {
		$existingdata['email'] = 'email@test.com';
		$existingdata['instancename'] = 'testinstancename';
		$existingdata['instanceurl'] = 'testinstanceurl@test.com';
		$existingdata['timecreation'] = time();
		$existingdata['timedeletion'] = time();
		$existingdata['ip'] = '127.0.0.1';
	}

    $payload = json_encode($existingdata);
   // $requesturl = "https://wordpress-1154182-4019807.cloudwaysapps.com/wp-json/demo/v1/remui_demo_details";
    //$requesturl = "https://webhook.site/#!/779fdc6b-0be8-4f60-95af-949a0c5a1089/bd9f33ab-36d2-49fd-af7d-269a4ae2f0fe/1";
    //$requesturl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
    $requesturl = "https://hooks.zapier.com/hooks/catch/804349/38wc6t1/";
    // Create a new cURL resource
    $curl = curl_init();

    if (!$curl) {
        die("Couldn't initialize a cURL handle");
    }

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
    var_dump($result);
    // Close cURL session handle
    curl_close($ch);
    //Sending it to edwiser
    $requesturl = "https://edwiser.org/wp-json/demo/v1/remui_demo_details";
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
    echo '<pre>';
    //check the result
    print_r($result);
}

erd_record_users(array());
