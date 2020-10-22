<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require("driverObject.php");
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/text.php");


$obj = new driverObject;

// objectArray
$finalArr = array($obj, $obj, $obj, $obj, $obj);


$tc01 = file_get_contents("../testCases/TC01.json");
$tc01 = json_decode($tc01);
$input1 = $tc01->testingInputs;
$expected1 = $tc01->expectedOutput;
$text = new core_text;

//Establish Object 
$finalArr[0]->settcID($tc01->testId);
$finalArr[0]->setRequirement($tc01->requirement);
$finalArr[0]->setDriver($tc01->driver);
$finalArr[0]->setClass($tc01->classTested);
$finalArr[0]->setMethod($tc01->methodTested);
$finalArr[0]->setTestingInput($tc01->testingInputs);
$finalArr[0]->setExpectedOutput($tc01->expectedOutput);


/////////////////////////////////////////////////////////////
// TC01
$parsed_charset = $text->parse_charset($input1);

if ($parsed_charset == $expected1){
	$finalArr[0]->setSuccess("PASS");
} else{
	$finalArr[0]->setSuccess("FAIL");
}

$finalArr[0]->gettcID();
$finalArr[0]->getRequirement();
$finalArr[0]->getDriver();
$finalArr[0]->getClass();
$finalArr[0]->getMethod();
$finalArr[0]->getTestingInput();
echo "Actual Output: ".$parsed_charset."$$$";
$finalArr[0]->getExpectedOutput();
$finalArr[0]->getSuccess();



//////////////////////////////////////////////////////////
// TC02

$tc02 = file_get_contents("../testCases/TC02.json");
$tc02 = json_decode($tc02);
$input2 = $tc02->testingInputs;
$expected2 = $tc02->expectedOutput;

//Establish Object 
$finalArr[1]->settcID($tc02->testId);
$finalArr[1]->setRequirement($tc02->requirement);
$finalArr[1]->setDriver($tc02->driver);
$finalArr[1]->setClass($tc02->classTested);
$finalArr[1]->setMethod($tc02->methodTested);
$finalArr[1]->setTestingInput($tc02->testingInputs);
$finalArr[1]->setExpectedOutput($tc02->expectedOutput);

$parsed_charset = $text->parse_charset($input2);

if ($parsed_charset == $expected2){
	$finalArr[1]->setSuccess("PASS");
} else{
	$finalArr[1]->setSuccess("FAIL");
}

$finalArr[1]->gettcID();
$finalArr[1]->getRequirement();
$finalArr[1]->getDriver();
$finalArr[1]->getClass();
$finalArr[1]->getMethod();
$finalArr[1]->getTestingInput();
echo "Actual Output: ".$parsed_charset."$$$";
$finalArr[1]->getExpectedOutput();
$finalArr[1]->getSuccess();


//////////////////////////////////////////////////////////
// TC03

$tc03 = file_get_contents("../testCases/TC03.json");
$tc03 = json_decode($tc03);
$input3 = $tc03->testingInputs;
$expected3 = $tc03->expectedOutput;

//Establish Object 
$finalArr[2]->settcID($tc03->testId);
$finalArr[2]->setRequirement($tc03->requirement);
$finalArr[2]->setDriver($tc03->driver);
$finalArr[2]->setClass($tc03->classTested);
$finalArr[2]->setMethod($tc03->methodTested);
$finalArr[2]->setTestingInput($tc03->testingInputs);
$finalArr[2]->setExpectedOutput($tc03->expectedOutput);

$parsed_charset = $text->parse_charset($input3);

if ($parsed_charset == $expected3){
	$finalArr[2]->setSuccess("PASS");
} else{
	$finalArr[2]->setSuccess("FAIL");
}

$finalArr[2]->gettcID();
$finalArr[2]->getRequirement();
$finalArr[2]->getDriver();
$finalArr[2]->getClass();
$finalArr[2]->getMethod();
$finalArr[2]->getTestingInput();
echo "Actual Output: ".$parsed_charset."$$$";
$finalArr[2]->getExpectedOutput();
$finalArr[2]->getSuccess();

//////////////////////////////////////////////////////////
// TC04

$tc04 = file_get_contents("../testCases/TC04.json");
$tc04 = json_decode($tc04);
$input4 = $tc04->testingInputs;
$expected4 = $tc04->expectedOutput;

//Establish Object 
$finalArr[3]->settcID($tc04->testId);
$finalArr[3]->setRequirement($tc04->requirement);
$finalArr[3]->setDriver($tc04->driver);
$finalArr[3]->setClass($tc04->classTested);
$finalArr[3]->setMethod($tc04->methodTested);
$finalArr[3]->setTestingInput($tc04->testingInputs);
$finalArr[3]->setExpectedOutput($tc04->expectedOutput);

$parsed_charset = $text->parse_charset($input4);

if ($parsed_charset == $expected4){
	$finalArr[3]->setSuccess("PASS");
} else{
	$finalArr[3]->setSuccess("FAIL");
}

$finalArr[3]->gettcID();
$finalArr[3]->getRequirement();
$finalArr[3]->getDriver();
$finalArr[3]->getClass();
$finalArr[3]->getMethod();
$finalArr[3]->getTestingInput();
echo "Actual Output: ".$parsed_charset."$$$";
$finalArr[3]->getExpectedOutput();
$finalArr[3]->getSuccess();

//////////////////////////////////////////////////////////
// TC05


$tc05 = file_get_contents("../testCases/TC05.json");
$tc05 = json_decode($tc05);
$input5 = $tc05->testingInputs;
$expected5 = $tc05->expectedOutput;


$finalArr[4]->settcID($tc05->testId);
$finalArr[4]->setRequirement($tc05->requirement);
$finalArr[4]->setDriver($tc05->driver);
$finalArr[4]->setClass($tc05->classTested);
$finalArr[4]->setMethod($tc05->methodTested);
$finalArr[4]->setTestingInput($tc05->testingInputs);
$finalArr[4]->setExpectedOutput($tc05->expectedOutput);

$parsed_charset = $text->parse_charset($input5);

if ($parsed_charset == $expected5){
	$finalArr[4]->setSuccess("PASS");
} else{
	$finalArr[4]->setSuccess("FAIL");
}

$finalArr[4]->gettcID();
$finalArr[4]->getRequirement();
$finalArr[4]->getDriver();
$finalArr[4]->getClass();
$finalArr[4]->getMethod();
$finalArr[4]->getTestingInput();
echo "Actual Output: ".$parsed_charset."$$$";
$finalArr[4]->getExpectedOutput();
$finalArr[4]->getSuccess();



?>
