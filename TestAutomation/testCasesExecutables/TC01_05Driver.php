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

$testCasesPath = "../testCases";
$files = scandir($testCasesPath);


// Fill Array of Test Case Decode Json
$testCaseArr = array();

// Fill Array with Empty Objects for Test Case Info
$finalArr = array();


$obj = new driverObject;

// decode json of all test cases in the test case path foler
for ($i = 2; $i < count($files); $i++){
	$tcObj = json_decode(file_get_contents($testCasesPath."/".$files[$i]));
	if($tcObj->driver == "TC01_05Driver.php"){
		array_push($testCaseArr, $tcObj);
		array_push($finalArr, $obj);
	}
}




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
	echo $parsed_charset."$$$";
	$finalArr[$i]->getExpectedOutput();
	$finalArr[$i]->getSuccess();
}

?>
