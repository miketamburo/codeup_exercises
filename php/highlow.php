<?php
// The High Low Game!
// Pick a random number between 1 and 100
$rand_number = mt_rand(1, 100);

// Ask the user to guess the number
echo "Welcome to the High / Low game! " . " Guess a number between 1 and 100. ";
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
exit();


?>
