<?php

// Prompt a user for a starting number and an ending number.
fwrite(STDOUT, 'Please enter a starting number and an ending number. Enter the first number. ');
$starting_number = intval(fgets(STDIN));

fwrite(STDOUT, 'Enter the second number: ');
$ending_number = intval(fgets(STDIN));

//Then display all numbers from the staring to ending using a for loop.
for ($i = 0; $i<$ending_number; $i++) {	
	echo $starting_number++ . "\n";
}

?>