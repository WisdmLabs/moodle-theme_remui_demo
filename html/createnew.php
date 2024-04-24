<?php
define('CLI_SCRIPT', true);
require_once("./InstanceManager.php");
if (!isset($argv[1])) {
    echo "Can not create instance without instance name";
    exit();
}
$im = new InstanceManager();
$im->create_new_instance($argv[1]);
