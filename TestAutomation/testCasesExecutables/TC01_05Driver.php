<?php
//error_reporting(0);
//TEST STRING TO LOWER & REGULAR EXPRESSIONS

define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/text.php");
$tc01 = file_get_contents("../testCases/TC01.json");
$tc01 = json_decode($tc01);
$input1 = $tc01->testingInputs;
$expected1 = $tc01->expectedOutput;
$text = new core_text;


/////////////////////////////////////////////////////////////
// TC01
echo("TC01\n");
echo("Initial Input: " . $input1 . "\n");
$parsed_charset = $text->parse_charset($input1);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected1 . "\n");

if ($parsed_charset == $expected1){
	echo "PASS\n";
} else{
	echo "FAIL\n";
}

//////////////////////////////////////////////////////////
// TC02
echo("\nTC02\n");
$tc02 = file_get_contents("../testCases/TC02.json");
$tc02 = json_decode($tc02);
$input2 = $tc02->testingInputs;
$expected2 = $tc02->expectedOutput;

echo("Initial Input: " . $input2 . "\n");
$parsed_charset = $text->parse_charset($input2);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected2 . "\n");

if ($parsed_charset == $expected2){
	echo "PASS\n";
} else{
	echo "FAIL\n";
}


//////////////////////////////////////////////////////////
// TC03
echo("\nTC03\n");
$tc03 = file_get_contents("../testCases/TC03.json");
$tc03 = json_decode($tc03);
$input3 = $tc03->testingInputs;
$expected3 = $tc03->expectedOutput;

echo("Initial Input: " . $input3 . "\n");
$parsed_charset = $text->parse_charset($input3);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected3 . "\n");

if ($parsed_charset == $expected3){
	echo "PASS\n";
} else{
	echo "FAIL\n";
}

//////////////////////////////////////////////////////////
// TC04
echo("\nTC04\n");
$tc04 = file_get_contents("../testCases/TC04.json");
$tc04 = json_decode($tc04);
$input4 = $tc04->testingInputs;
$expected4 = $tc04->expectedOutput;

echo("Initial Input: " . $input4 . "\n");
$parsed_charset = $text->parse_charset($input4);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected4 . "\n");

if ($parsed_charset == $expected4){
	echo "PASS\n";
} else{
	echo "FAIL\n";
}


//////////////////////////////////////////////////////////
// TC05
echo("\nTC05\n");
$tc05 = file_get_contents("../testCases/TC05.json");
$tc05 = json_decode($tc05);
$input5 = $tc05->testingInputs;
$expected5 = $tc05->expectedOutput;

echo("Initial Input: " . $input5 . "\n");
$parsed_charset = $text->parse_charset($input5);
print_r("Parsed Charset: " . $parsed_charset . "\n");
print_r("Expected Output: " . $expected5 . "\n");

if ($parsed_charset == $expected5){
	echo "PASS\n";
} else{
	echo "FAIL\n";
}


?>
