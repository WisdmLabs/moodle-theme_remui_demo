<?php

require_once("/var/www/demo/html/InstanceManager.php");

$im = new InstanceManager();
if ($im->restart_server()) {
	exec("nginx -t", $output, $code);

	if (!$code) {
	    exec("service nginx reload");
	    $im->reset_server_semaphore();
	}
}
