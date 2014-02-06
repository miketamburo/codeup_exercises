<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
	// output the appropriate result
	echo "$a is less than $b\n";
} else if ($a > $b){
	// outp ut the appropriate result
	echo "$a is greater than $b\n";
}

if ($b > $a) {
	// output the appropriate result
	echo "$b is greater than $a\n";
}

if ($b >= $c) {
	// output the appropriate result
	echo "$b is greater than or equal to $c\n";
} else {
	// output the appropriate result
	echo "$b is less than or equal to $c\n";
}

// start of next section

if ($b === $c) {
	// Changed the output to show the values of the variables are identical
	
	echo "The value of $b is identical to the value $c\n";
} else {
	if ($b == $c) {
	// output the appropriate result
	echo "$b is equal to $c\n";
	} else if ($b != $c) {
	echo "$b is not equal to $c\n";
	} else {
	echo "$b is not identical to $c\n";
	}
}
?>

