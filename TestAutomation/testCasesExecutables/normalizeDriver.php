<?php
//DRIVER FOR NORMALIZE_DRIVER METHOD IN ENVIRONMENTLIB.PHP
define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/lib/environmentlib.php");

if (!$argv[1]) {
	throw new Exception('Inputs are invalid...');
}
try {
	$output = normalize_version($argv[1]);
	print_r($output);
} catch (Exception $e) {
	print_r('Caught exception: '.$e->getMessage()."\n");
}

?>
