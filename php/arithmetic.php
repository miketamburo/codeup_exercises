<?php

function add($num1, $num2) {
    echo $num1 + $num2 . PHP_EOL;
}

function subtract($num1, $num2) {
    echo $num1 - $num2 . PHP_EOL;
}

function multiply($num1, $num2) {
    echo $num1 * $num2 . PHP_EOL;
}

function divide($num1, $num2) {
	if ($num2 == 0) {
		echo "Didn't you learn in elementary school you can divide by zero?\n";
		echo "The input values were:  $num1 and $num2.\n";
	} else {
    echo $num1 / $num2 . PHP_EOL;
	}
}

function modulus($num1, $num2) {
    if ($num2 == 0) {
		echo "Didn't you learn in elementary school you can divide by zero?\n";
		echo "The input values were:  $num1 and $num2.\n";
	} else {
    echo $num1 % $num2 . PHP_EOL;
    }
}

$num1 = 40;
$num2 = 0;

if (is_numeric($num1) && (is_numeric($num2))) {
	add($num1, $num2);
	subtract($num1, $num2);
	multiply($num1, $num2);
	divide($num1, $num2);
	modulus($num1, $num2);
} else {
	echo "The inputs are not numeric.\n";
}

?>