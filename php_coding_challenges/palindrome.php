<?php
// Create a function that can detect whether a whord is a palindrome or not
echo "This program will evaluate if a word you enter is a palindrome." . PHP_EOL;
echo "Please enter a word you would like to check." . PHP_EOL;
// Get the user's input
$user_input = (strtolower(trim(fgets(STDIN))));

// Remove unwanted characters
$new_input = $user_input;
$remove_items = array(" ", ",", "'", ":", "!", ";", "?", ".");

$newphrase = str_replace($remove_items, "", $new_input);

// Reverse the order of letters in the user's input
$user_reverse = strrev($newphrase);

if ($newphrase === $user_reverse){
	echo (ucfirst($user_input)) . PHP_EOL;
	echo (ucfirst($user_reverse)) . PHP_EOL;
	echo "Your word is a palindrome!" . PHP_EOL;
	return True;
} else {
	// echo (ucfirst($user_input)) . PHP_EOL;
	// echo (ucfirst($user_reverse)) . PHP_EOL;
	echo "Sorry, your word is not a palindrome." . PHP_EOL;
	return False;
}
exit(0);
?>