<?php
// The High Low Game!
echo "Welcome to the High Low Game!\n";
// Adding the feature of input validation.  Check that at least 3 inputs exist (file name + 2 others)
if ($argc >= 3) {
	$input1 = $argv[1]; // Equal to the first argument received
	$input2 = $argv[2]; // Equal to the second argument received

	// Verify they are numbers
	if (is_numeric($input1) && is_numeric($input2)) {
		// Found out which one is the lower number and assign values to the min & max numbers to keep the game going vs exit with error.
		if ($input1 > $input2) {
			$min = $input2; 
			$max = $input1;
			$rand_number = mt_rand($min, $max);
		} else {
			$min = $input1;
			$max = $input2;
			$rand_number = mt_rand($min, $max);
		}
	} else {
		// Addresses if they are not numbers and you stil want to play vs exit.
		echo "I did not find the correct inputs to play the game.\n I want to play. \n";
		$rand_number = mt_rand(1, 100);
		$min = 1;
		$max = 100;
	}
} else {
	// Addresses if less than 3 inputs are found.
	echo "I did not find the correct inputs to play the game.\n I want to play so guess a number between 1 and 100. \n";
	$rand_number = mt_rand(1, 100);
	$min = 1;
	$max = 100;
}

// Ask the user to guess the number
echo "Guess a number between $min and $max. ";
$num_Of_Guesses = 0;

// Determine if the user's guess is higher or lower than the computer's number
do { 

	echo "Guess? ";
	$guess = fgets(STDIN);

// Count the number of guesses
	$num_Of_Guesses++;

// Addresses the chance they guess the number on their first try.
	if (($guess == $rand_number) && ($num_Of_Guesses == 1)) {
		echo "You win!  Lucky you. \n";

	} elseif ($guess < $rand_number) {
		echo "HIGHER! \n";

	} elseif ($guess > $rand_number) {
		echo "LOWER! \n";	
	}	


} while ($guess != $rand_number);

// Tell the user they won!
// To remove the carriage return I just used the value of the random number variable vs the STDIN
echo "WINNER!  The number was $rand_number!\n";
echo "It took you $num_Of_Guesses tries.\n";
exit(0);


?>