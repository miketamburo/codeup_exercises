<?php
/* Create a function alphabet_soup($str) that accepts a string 
and will return the string in alphabetical order. E.g. "hello world" 
becomes "ehllo dlorw". So make sure your function separates and 
alphabetizes each word separately.
*/

echo "Enter a word or phrase for some alphabetizing fun!" . PHP_EOL;

$user_input = (trim(fgets(STDIN)));

// Save the user's input for later use
$new_phrase = $user_input;

$new_phrase_array = explode(" ", $new_phrase);

foreach($new_phrase_array as $value){
	$reverse_word = strrev($value);

	echo "$reverse_word ";
}

echo "\n";

exit(0);

?>