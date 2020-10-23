<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require("driverObject.php");
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/text.php");

// Create Object of our Selected "Core Text" Class
$text = new core_text;

// Decode Json Objects from Test Case Folder
$tc01 = json_decode(file_get_contents("../testCases/TC01.json"));
$tc02 = json_decode(file_get_contents("../testCases/TC02.json"));
$tc03 = json_decode(file_get_contents("../testCases/TC03.json"));
$tc04 = json_decode(file_get_contents("../testCases/TC04.json"));
$tc05 = json_decode(file_get_contents("../testCases/TC05.json"));
$obj = new driverObject;

// Fill Array with Empty Objects for Test Case Info
$finalArr = array($obj, $obj, $obj, $obj, $obj);

// Fill Array of Test Case Decode Json
$testCaseArr = array($tc01, $tc02, $tc03, $tc04, $tc05);

for ($i = 0; $i < count($finalArr); $i++){

	$input = $testCaseArr[$i]->testingInputs;
	$expectedOut = $testCaseArr[$i]->expectedOutput;
	
	//Establish Object 
	$finalArr[$i]->settcID($testCaseArr[$i]->testId);
	$finalArr[$i]->setRequirement($testCaseArr[$i]->requirement);
	$finalArr[$i]->setDriver($testCaseArr[$i]->driver);
	$finalArr[$i]->setClass($testCaseArr[$i]->classTested);
	$finalArr[$i]->setMethod($testCaseArr[$i]->methodTested);
	$finalArr[$i]->setTestingInput($testCaseArr[$i]->testingInputs);
	$finalArr[$i]->setExpectedOutput($testCaseArr[$i]->expectedOutput);


	$parsed_charset = $text->parse_charset($input);

	if ($parsed_charset == $expectedOut){
		$finalArr[$i]->setSuccess("PASS");
	} else{
		$finalArr[$i]->setSuccess("FAIL");
	}

	$finalArr[$i]->gettcID();
	$finalArr[$i]->getRequirement();
	$finalArr[$i]->getDriver();
	$finalArr[$i]->getClass();
	$finalArr[$i]->getMethod();
	$finalArr[$i]->getTestingInput();
	echo "Actual Output: ".$parsed_charset."$$$";
	$finalArr[$i]->getExpectedOutput();
	$finalArr[$i]->getSuccess();
}

?>
