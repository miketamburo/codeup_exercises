<?php
// The add function 
function add($num1, $num2) {
	if (numeric_check($num1, $num2) == true){
    	return ($num1 + $num2);
 	} else {
 		exit(0);
 	}
}

// The subtraction function
function subtract($num1, $num2) {
	if (numeric_check($num1, $num2) == true){
     	return ($num1 - $num2);
 	} else {
 		exit(0);
 	}
}

// The multiply function
function multiply($num1, $num2) {
	if (numeric_check($num1, $num2) == true){
     	return ($num1 * $num2);
 	} else {
 		exit(0);
 	}
}

// The divide function
function divide($num1, $num2) {
	if (numeric_check($num1, $num2) == true){
     	return ($num1 + $num2);
 	} else {
 		exit(0);
 	}
	if ($num2 == 0) {
		return false;
	} else {	
    	return ($num1 / $num2);
	}
}

// The modulus function
function modulus($num1, $num2) {
	if (numeric_check($num1, $num2) == true){
     	return ($num1 + $num2);
 	} else {
 		exit(0);
 	}
    if ($num2 == 0) {
    	return false;
		// echo "Didn't you learn in elementary school you can't divide by zero?\n";
		// echo "The input values were:  $num1 and $num2.\n";
	} else {	
    	return ($num1 % $num2);
	}
}

// The numeric check function
function numeric_check ($num1, $num2) {
	if ((is_numeric($num1)) && (is_numeric($num2))) {
		return true;
	} else {
		return false;
		
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