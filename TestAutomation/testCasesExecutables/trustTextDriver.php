<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
include("../project/moodle1/user/lib/weblib.php");

if (!$argv[1]) {
	throw new Exception('Inputs are invalid...');
}
try {
	$output = trusttext_strip($argv[1]);
	print_r($output);
} catch (Exception $e) {
	print_r('Caught exception: '.$e->getMessage()."\n");
}

