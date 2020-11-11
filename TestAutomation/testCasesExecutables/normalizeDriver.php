<?php
//DRIVER FOR NORMALIZE_DRIVER METHOD IN ENVIRONMENTLIB.PHP
define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/lib/environmentlib.php");


// normalize a string of characters to only numbers, trim characters off ends
$argument = normalize_version($argv[1]);

print_r($argument);

?>
