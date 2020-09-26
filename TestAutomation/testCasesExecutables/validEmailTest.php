<?php
error_reporting(0);

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
$newTest = new validEmailTest();
$newTest->testUsername($argv[1]);

?>

