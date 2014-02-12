<?php

// The numeric check function
function numeric_check ($num1, $num2) {
	return (is_numeric($num1) && is_numeric($num2));
}	

// The add function 
function add($num1, $num2) {	
	if (numeric_check($num1, $num2)) {
		return ($num1 + $num2);
	}
}

// The subtraction function
function subtract($num1, $num2) {
	if (numeric_check($num1, $num2)) {
		return ($num1 - $num2);
	} 	
}

// The multiply function
function multiply($num1, $num2) {
if (numeric_check($num1, $num2)) {
		return ($num1 * $num2);
	}
}

// The divide function
function divide($num1, $num2) {
	if (numeric_check($num1, $num2) && ($num2 != 0)) {
		return ($num1 / $num2);
	}	
}

// The modulus function
function modulus($num1, $num2) {
		if (numeric_check($num1, $num2) && ($num2 != 0)) {
		return ($num1 % $num2);
	}		
}

$num1 = 40;
$num2 = 0;


	add($num1, $num2);
	subtract($num1, $num2);
	multiply($num1, $num2);
	divide($num1, $num2);
	modulus($num1, $num2);

?>