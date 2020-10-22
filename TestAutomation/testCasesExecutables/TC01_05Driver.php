<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

// Create Array Object Class
class driverArrayObject {
	var $tcID;
	var $requirement;
	var $driver;
	var $class;
	var $method;
	var $testingInput;
	var $expectedOutput;
	var $success;
	
	function settcID($id){
		$this->tcID = $id;
	}
	function gettcID(){
		echo $this->tcID."<br>";
	}
	function setRequirement($id){
		$this->requirement = $id;
	}
	function getRequirement(){
		echo $this->requirement."<br>";
	}
	function setDriver($id){
		$this->driver = $id;
	}
	function getDriver(){
		echo $this->driver."<br>";
	}
	function setClass($id){
		$this->class = $id;
	}
	function getClass(){
		echo $this->class."<br>";
	}
	function setMethod($id){
		$this->method = $id;
	}
	function getMethod(){
		echo $this->method."<br>";
	}
	function setTestingInput($id){
		$this->testingInput = $id;
	}
	function getTestingInput(){
		echo $this->testingInput."<br>";
	}
	function setExpectedOutput($id){
		$this->expectedOutput = $id;
	}
	function getExpectedOutput(){
		echo $this->expectedOutput."<br>";
	}
	function setSuccess($id){
		$this->success = $id;
	}
	function getSuccess(){
		echo $this->success."<br>";
	}

}

$obj = new driverArrayObject;

// objectArray
$finalArr = array($obj, $obj, $obj, $obj, $obj);

define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/text.php");
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
echo("TC01\n");
echo("Initial Input: " . $input1 . "\n");
$parsed_charset = $text->parse_charset($input1);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected1 . "\n");

if ($parsed_charset == $expected1){
	$finalArr[0]->setSuccess("PASS");
} else{
	$finalArr[0]->setSuccess("FAIL");
}




//////////////////////////////////////////////////////////
// TC02

echo("\nTC02\n");
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

echo("Initial Input: " . $input2 . "\n");
$parsed_charset = $text->parse_charset($input2);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected2 . "\n");

if ($parsed_charset == $expected2){
	$finalArr[1]->setSuccess("PASS");
} else{
	$finalArr[1]->setSuccess("FAIL");
}


//////////////////////////////////////////////////////////
// TC03

echo("\nTC03\n");
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

echo("Initial Input: " . $input3 . "\n");
$parsed_charset = $text->parse_charset($input3);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected3 . "\n");

if ($parsed_charset == $expected3){
	$finalArr[2]->setSuccess("PASS");
} else{
	$finalArr[2]->setSuccess("FAIL");
}

//////////////////////////////////////////////////////////
// TC04


echo("\nTC04\n");
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

echo("Initial Input: " . $input4 . "\n");
$parsed_charset = $text->parse_charset($input4);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected4 . "\n");

if ($parsed_charset == $expected4){
	$finalArr[3]->setSuccess("PASS");
} else{
	$finalArr[3]->setSuccess("FAIL");
}


//////////////////////////////////////////////////////////
// TC05


echo("\nTC05\n");
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

echo("Initial Input: " . $input5 . "\n");
$parsed_charset = $text->parse_charset($input5);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected5 . "\n");

if ($parsed_charset == $expected5){
	$finalArr[4]->setSuccess("PASS");
} else{
	$finalArr[4]->setSuccess("FAIL");
}

echo "hello";
$finalArr[4]->getClass();
echo "hello";



?>
