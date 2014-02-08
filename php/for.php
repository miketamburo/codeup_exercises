<?php

// Prompt a user for a starting number and an ending number.
fwrite(STDOUT, 'Please enter a starting number and an ending number. Enter the first number. ');
$starting_number = fgets(STDIN);

fwrite(STDOUT, 'Enter the second number: ');
$ending_number = fgets(STDIN);

// Sanitizer
$starting_number = trim($starting_number);
$ending_number = trim($ending_number);


// Test to see if entries are numeric
 if (!is_numeric($starting_number) || !is_numeric($ending_number)) {
 	echo "Error!  You did not enter numbers!\n";
 	exit(0);
 }
 

fwrite(STDOUT, 'Enter your desired counting increment. ');
$increment = intval(fgets(STDIN));
if ($increment === 0) {
	$increment = 1;
	echo "You didn't enter a value.  We will count by 1s.\n";
}

//Then display all numbers from the staring to ending using a for loop.
// Address if the starting number is less than or greater than the ending number
if ($starting_number < $ending_number) {
	for ($i = $starting_number; $i<=$ending_number; $i = $i + $increment) {	
		echo "$starting_number\n";
		$starting_number = $starting_number + $increment;
	}
} else {
	// When the starting number is greater than the ending number
	for ($i = $starting_number; $i>=$ending_number; $i = $i - $increment) {	
		echo "$starting_number\n";
		$starting_number = $starting_number - $increment;
}
}

?>