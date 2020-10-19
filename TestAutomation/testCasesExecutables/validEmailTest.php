<?php
//error_reporting(0);
define('CLI_SCRIPT', true);
require_once("../project/moodle1/config.php");
require("../project/moodle1/user/lib.php");
require("../project/moodle1/lib/classes/user.php");

$core = new core_user;

$newuser = $core->get_user(2);
print_r($newuser);

$newuser->id = NULL;
$newuser->username = 'meepboy';
$newuser->password = 'Yeahboy123!';
$newuser->firstname = 'Meep';
$newuser->lastname = 'Boy';
$newuser->email = 'meep@gmail.com';
$newuser->description = "Testing testing";

$newuser_id = user_create_user($newuser);
print_r($newuser_id);

$fetched_user = $core->get_user($newuser_id);

print_r($fetched_user);

user_delete_user($fetched_user);









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




