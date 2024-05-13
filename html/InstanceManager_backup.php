<?php

class InstanceManager {
    private $_allInstances;
    private $_delInstances;
    private $jsonfile = '/var/www/instances.json';
    private $jsonfiledel = '/var/www/instancesdeleted.json';
    private $destroyPeriod = 1 * 1 * 1 * 60; // Day * Hours * Mins * seconds

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
     * This will return existing unused demo details to user.
     * along with creating new instance.
     */
    function retrieve_fresh_instance($email) {
        // Get current time for new instance creation.
        $timecreation = time();

        // Generate data for requesting user.
        // Here we are fetching 0th index existing demo and move it to in use array.
        $existingdata = $this->_allInstances['instances'][0];
        $existingdata['email'] = $email;
        $existingdata['timecreation'] = $timecreation;
        $existingdata['timedeletion'] = $timecreation + $this->destroyPeriod;
        $this->_allInstances['inuse'][] = $existingdata;

        // Delete 0th Index from existing instances.
        unset($this->_allInstances['instances'][0]);

        $demoname = $this->generate_demo_name('tryremui'.$timecreation);
        $demourl = $demoname.".tryremui.edwiser.org";

        $newdata = [
            "email" => 'test@xyz.com',
            "instancename" => $demoname,
            "instanceurl" => $demourl,
            "timecreation" => '00000000',
            "timedeletion" => '00000000'
        ];

        $this->_allInstances['instances'][] = $newdata;

        $this->_allInstances['instances'] = array_values($this->_allInstances['instances']);

        $this->write_instance_to_json($this->jsonfile, $this->_allInstances);

        $this->create_new_instance($newdata['instancename']);

        // exec("php7.4 createnew.php ".$newdata['instancename']);

        return $existingdata;
    }

    /**
     * Generate New Name for demo.
     * Used sha256 to generate unique hashcode each time for new demo name.
     */
    function generate_demo_name($str){
        // $str = "tryremui0".time();
        return substr(hash("sha256", $str), 0, 6);
    }

    /**
     * Create New Instance with given name.
     */
    function create_new_instance($name){
        $cmd = "service nginx restart";
        exec($cmd, $output, $code);
        echo "<pre>";
        print_r($output);
        print_r($code);
        exit;
        $cmd = "bash /var/www/manage_remui_hosts.sh create " . $name . " 10 > /dev/null &";
	    exec($cmd, $output, $code);

    }

    /**
     * Destroy instances for current time.
     */
    function destroy_instances_by_time() {
        $currTime = time();
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
        $cmd = "bash /var/www/manage_remui_hosts.sh delete " . $name . "  > /dev/null &";
        exec($cmd);
    }

}
