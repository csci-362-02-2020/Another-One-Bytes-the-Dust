<?php
// Object class for array of objects in each driver
class driverObject {
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
		echo $this->tcID."$$$";
	}
	function setRequirement($id){
		$this->requirement = $id;
	}
	function getRequirement(){
		echo $this->requirement."$$$";
	}
	function setDriver($id){
		$this->driver = $id;
	}
	function getDriver(){
		echo $this->driver."$$$";
	}
	function setClass($id){
		$this->class = $id;
	}
	function getClass(){
		echo $this->class."$$$";
	}
	function setMethod($id){
		$this->method = $id;
	}
	function getMethod(){
		echo $this->method."$$$";
	}
	function setTestingInput($id){
		$this->testingInput = $id;
	}
	function getTestingInput(){
		echo $this->testingInput."$$$";
	}
	function setExpectedOutput($id){
		$this->expectedOutput = $id;
	}
	function getExpectedOutput(){
		echo $this->expectedOutput."$$$";
	}
	function setSuccess($id){
		$this->success = $id;
	}
	function getSuccess(){
		echo $this->success."***";
	}

}

?>
