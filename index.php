<?php

	$obj = new main();
	//$text = "my text";
	//$obj->printthis($text);
	
	//$array = array(1,2,3,4,5,6,7);
	//$obj->printArray($array);
	
	class main {
	
		public function __construct() {
			echo 'Hello I\'m Starting </br>';
			//$this->printthis($text);
			//$string = new stringFunction();
			//$string->printThis($text);
			$text = "<h1>First Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "First text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>First Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Second Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Second text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Second Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Third Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Third text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Third Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Fourth Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Fourth text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Fourth Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3,4);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Fifth Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Fifth text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Fifth Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3,4,5);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Sixth Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Sixth text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Sixth Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3,4,5,6);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Seventh Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Seventh text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Seventh Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3,4,5,6,7);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Eighth Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Eighth text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Eighth Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3,4,5,6,7,8);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Ninth Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Ninth text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Ninth Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3,4,5,6,7,8,9);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
			
			$text = "<h1>Tenth Print Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$text = "Tenth text I printed";
			stringFunctions::printThis($text);
			$text = "<hr>";
			stringFunctions::printThis($text);
			$text = "<h1>Tenth Array Function Demonstration</h1>";
			stringFunctions::printThis($text);
			$myArray = array(1,2,3,4,5,6,7,8,9,10);
			arrayFunctions::printArray($myArray);
			$text = "<hr>";
			stringFunctions::printThis($text);
		}
		
	//	public function printthis($text) {
	//	
	//		echo '<h1>print function demo </h1>';
	//		print($text);
	//		echo '<hr>';
	//	}
		
	//	public function printArray($array) {
	//	
	//		echo '<h1>array print function</h1>';
	//		print_r($array);
	//		echo '<hr>';
	//	}
		
		public function __destruct() {
		
			echo '<br> I\'m Done';
		}
	}
	
	class arrayFunctions {
		static public function printArray($array) {
			print_r($array);
		}
	}
	
	class stringFunctions {
	
		static public function printThis($inputText) {
			print($inputText);
		}
	}
?>