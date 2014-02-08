<?php
// The High Low Game!
// Check that the arguments total the 3 required
if (($argc == 3)&&((is_numeric($argv[1])!=(is_numeric($argv[2])) {
			do {	
				// Figure out which number is the minimum and which one is the maximum number.
				if ($argv[1] > $argv[2]) {
					$min = $argv[2];
					$max = $argv[1];
				} else {
					$min = $argv[1];
					$max = $argv[2];
				}
		} while ($argv[1]  $argv[2]);  

} else {
	echo "You didn't enter the correct information.  We will play by guessing a number between 1 and 100";
	$min = 1;
	$max = 100;
}
	
// Generate the random myster number:
$rand_number = mt_rand($min, $max);	

echo "Welcome to the High / Low game! " . " Guess a number between $min and $max. ";
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

echo "GOOD GUESS!  The number was $rand_number!\n";
echo "It took you $num_Of_Guesses tries.\n";
exit();
}


?>
