<?php
require_once("/var/www/demo/html/InstanceManager.php");

$im = new InstanceManager();

$im->destroy_instances_by_time();