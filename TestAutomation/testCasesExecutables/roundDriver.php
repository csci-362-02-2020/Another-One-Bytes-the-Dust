<?php
//error_reporting(0);
//REPLACES CHARACTERS IN A STRING WITH HTML

define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/evalmath/evalmath.class.php");

if (!$argv[1]) {
	throw new Exception('Inputs are invalid...');
}
try {
	$val = new EvalMathFuncs;
	$output = $val->round($argv[1]);
	print_r($output);
} catch (Exception $e) {
	print_r('Caught exception: '.$e->getMessage()."\n");
}

?>
