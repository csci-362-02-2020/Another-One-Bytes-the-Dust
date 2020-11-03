<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require("driverObject.php");
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/grades_external.php");

// Create Object of our Selected "Core Text" Class
$grades = new core_grades_external;
$finalArr = array(1, 2, 4, 5);
print_r($grades->get_grades(1, "Josh", 5, $finalArr));

// Decode Json Objects from Test Case Folder
//$tc01 = json_decode(file_get_contents("../testCases/TC01.json"));
//$tc02 = json_decode(file_get_contents("../testCases/TC02.json"));
//$tc03 = json_decode(file_get_contents("../testCases/TC03.json"));
//$tc04 = json_decode(file_get_contents("../testCases/TC04.json"));
//$tc05 = json_decode(file_get_contents("../testCases/TC05.json"));
//$obj = new driverObject;

// Fill Array with Empty Objects for Test Case Info
//$finalArr = array($obj, $obj, $obj, $obj, $obj);

// Fill Array of Test Case Decode Json
//$testCaseArr = array($tc01, $tc02, $tc03, $tc04, $tc05);


