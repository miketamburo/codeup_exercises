<?php
// The High Low Game!
// Pick a random number between 1 and 100
$rand_number = rand(1, 100);

// Ask the user to guess the number
echo "Welcome to the High / Low game! " . " Guess a number between 1 and 100. ";
$guess = fgets(STDIN);

// Determine if the user's guess is higher or lower than the computer's number
do { 

	if ($guess == $rand_number) {
		echo "You win!  Lucky you. \n";
	} elseif ($guess < $rand_number) {
		echo "HIGHER! \n";
		echo "Guess? ";
		$guess = fgets(STDIN);
	} else {
		echo "LOWER! \n";
		echo "Guess? ";
		$guess = fgets(STDIN);
	}	


} while ($guess != $rand_number);
// Tell the user they won!
// To remove the carriage return I just used the value of the random number variable vs the STDIN
echo "WINNER!  The number was $rand_number!\n";
exit();


?>
