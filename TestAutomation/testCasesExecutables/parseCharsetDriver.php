<?php
//DRIVER FOR PARSECHARSET METHOD
define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/lib/classes/text.php");

if (!$argv[1]) {
	throw new Exception('Inputs are invalid...');
}
try {
	$text = new core_text;
	$output = $text->parse_charset($argv[1]);
	print_r($output);
} catch (Exception $e) {
	print_r('Caught exception: '.$e->getMessage()."\n");
}
?>
