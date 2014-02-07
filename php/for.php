<?php

// Prompt a user for a starting number and an ending number.
fwrite(STDOUT, 'Please enter a starting number and an ending number. Enter the first number. ');
$starting_number = intval(fgets(STDIN));

fwrite(STDOUT, 'Enter the second number: ');
$ending_number = intval(fgets(STDIN));

fwrite(STDOUT, 'Enter your desired counting increment. ');
$increment = intval(fgets(STDIN));
if ($increment == NULL) {
	$increment = 1;
	echo "You didn't enter a value.  We will count by 1s.\n";
}

//Then display all numbers from the staring to ending using a for loop.
for ($i = 0; $i<$ending_number; $i = $i + $increment) {	
	echo "$starting_number\n";
	$starting_number = $starting_number + $increment;
}

?>