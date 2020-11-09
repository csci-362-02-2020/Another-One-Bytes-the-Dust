<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require("driverObject.php");
require("dog.php");
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/grades_external.php");
require("../project/moodle1/lib/classes/collator.php");
//include("../project/moodle1/lib/classes/weblib.php");


////////////////////////////////////////////////////
// 2.) successful test 2 for html tag regex replacement

$new = s(false);
$new = s("<h2>");
print_r($new);
///////////////////////////////////////////////////
echo "\n";

//////////////////////////////////////////////////
// 3.) break up long words
$breaklong = break_up_long_words("mcbutt@gmail.comjsjskdjflksjdlfjslkdj", -1, "@");
print_r($breaklong);
////////////////////////////////////////

echo "\n";
//4.) obfuscate text
$email = "helloworld";
//print_r($email);
$ob = obfuscate_text($email);
print_r($ob);













//$dog1 = new dog;
//$dog2 = new dog;
//$dog1->setName("Polly");
//$dog2->setName("Henry"); 
//$dogArray = array("zebra", "paul", "ernie");
//$dogArray[0]->getName();

//print_r(core_collator::asort($dogArray, -1));



// Create Object of our Selected "Core Text" Class
//$grades = new core_grades_external;
//$finalArr = array(1, 2, 4, 5);
//print_r($grades->get_grades(1, "Josh", 5, $finalArr));

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


