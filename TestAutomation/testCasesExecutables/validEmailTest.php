<?php
//error_reporting(0);
define('CLI_SCRIPT', true);
defined('MOODLE_INTERNAL') || die();
require_once("../project/moodle1/config.php");
require(__DIR__ . "../project/moodle1/search/classes/document.php");

$testClass = new document( 23, 'twenty-three', 'twenty-three' );

$final = $testClass->get("string");
echo $final
/*
$newTest = new validEmailTest();
$newTest->testUsername($argv[1]);

















class validEmailTest {

function testUsername($name){
$valid = False;
$array = str_split($name);
foreach ($array as $char){
	if ($char == "$"){
		$valid = True;
	}
}
if (!$valid){
	echo "This is a valid username...";
}
else {
	echo "This is NOT a valid username, please remove $$$'s";
}
}

}
*/

?>




