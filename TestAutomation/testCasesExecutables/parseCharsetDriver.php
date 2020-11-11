<?php
//DRIVER FOR PARSECHARSET METHOD
define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/text.php");

// Create Object of our Selected "Core Text" Class
$text = new core_text;

// parse_charset the input passed in
$argument = $argv[1];
print_r($text->parse_charset($argument));

?>
