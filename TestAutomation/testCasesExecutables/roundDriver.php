<?php
//error_reporting(0);
//REPLACES CHARACTERS IN A STRING WITH HTML

define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/evalmath/evalmath.class.php");

$numbers = $argv[1];
$val = new EvalMathFuncs;

$value = $val->round($numbers);

print_r($value);

?>
