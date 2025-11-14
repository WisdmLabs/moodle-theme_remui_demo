<?php

if (3 <= round(disk_free_space("/") / 1024 / 1024 / 1024) &&  false) {
  echo "We are fine here";
} else {
  exec('php8.0 /var/www/demo/html/deleteinstance.php');
  header("HTTP/1.1 500 Internal Server Error");
}
