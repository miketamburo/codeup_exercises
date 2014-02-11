<?php

// The numeric check function
function numeric_check ($num1, $num2) {
	if ((!is_numeric($num1)) || (!is_numeric($num2))) {
		return "Error:  The values are not numeric.";
	} elseif ($num2 == 0) {
		$isItDivisible == 0;
	} else {
		$isItDivisible = 1;
	}
} 

// The add function 
function add($num1, $num2) {
	if (numeric_check ($num1, $num2)) {
    	return ($num1 + $num2);
    	echo ($num1 + $num2);
	} else {
		return 0;
	}
 	
}

// // The subtraction function
// function subtract($num1, $num2) {
// 	if (numeric_check ($num1, $num2, $notzero)) {
//      	return ($num1 - $num2);		
// 	}
 	
// }

// // The multiply function
// function multiply($num1, $num2) {
	
//      	return ($num1 * $num2);
 	
// }

// // The divide function
// function divide($num1, $num2, $notzero) {
// 	if ($notzero = true) {
//      	return ($num1 / $num2);
//  	} else {
//  		return false;
//  	}
// }

// // The modulus function
// function modulus($num1, $num2, $notzero) {
// 	if ($notzero = true) {
//      	return ($num1 % $num2);
//  	} else {
//  		return false;
//  	}
// }


$num1 = 40;
$num2 = 10;

	add($num1, $num2);
	// subtract($num1, $num2);
	// multiply($num1, $num2);
	// divide($num1, $num2);
	// modulus($num1, $num2);

?>