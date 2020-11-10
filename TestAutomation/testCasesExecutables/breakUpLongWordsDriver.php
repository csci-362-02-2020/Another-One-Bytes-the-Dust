<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");

$splitStrings = explode("*", $argv[1]);

$breaklong = break_up_long_words($splitStrings[0], intval($splitStrings[1]), $splitStrings[2]);
print_r($breaklong);

?>
