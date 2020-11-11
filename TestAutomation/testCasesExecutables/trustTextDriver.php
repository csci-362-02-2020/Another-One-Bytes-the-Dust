<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
include("../project/moodle1/user/lib/weblib.php");


////////////////////////////////////////////////////
// 2.) successful test 2 for html tag regex replacement
$arg = $argv[1];
$new = trusttext_strip($arg);
print_r($new);
///////////////////////////////////////////////////



