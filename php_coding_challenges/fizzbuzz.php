<?php
// This is the famous FizzBuzz problem.
/* Write a program that prints the numbers from 1 to 100. 
But for multiples of three print “Fizz” instead of the number and for the multiples of five 
print “Buzz”. For numbers which are multiples of both three and five 
print “FizzBuzz”.
*/

// State the starting point as 1. 
// State the number of times the loop is required (i.e. 1 to 100)
for ($number=1; $number<=100; $number++) {
	
// Check if the number is divisible by 3, 5, or both.  
// Listed rarest case first (i.e. divisible by both)	
	if (($number % 3 == 0) && ($number % 5 == 0)) {
		echo "FizzBuzz\n";
	} elseif ($number % 3 == 0) {
		echo "Fizz\n";
	} elseif ($number % 5 == 0) {
		echo "Buzz\n";
	} else {
		echo "$number\n";
	}
}
exit(0);	

?>