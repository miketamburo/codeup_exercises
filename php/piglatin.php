<?php
/*
Description:
English is translated to Pig Latin by taking the first letter of every word, 
moving it to the end of the word and adding ‘ay’. “The quick brown fox” becomes 
“Hetay uickqay rownbay oxfay”.

Specifications:

The program receives a sentence and converts it to "Pig Latin".

If a word in English starts with capital letter its Pig Latin translation will also start with a capital letter.

No punctuation or special characters handling needed*

Input
A sentence in English with no punctuation nor special characters

Output
Sentence translated to Pig Latin
Example:  Input: Sign me up for first coding challenge

Output: Ignsay emay puay orfay irstfay odingcay hallengecay

Pig Latin = > English (3 Points)
Description:

Write a function that translate sentences in "Pig Latin" back to English
Specifications:

The program receives a sentence in "Pig Latin" and converts it to English
If a word in Pig Latin starts with capital letter its English translation will also start with a capital letter.
No punctuation or special characters handling needed
Input
A sentence in Pig Latin with no punctuation nor special characters
Output
Sentence translated to English
Example
Input: Ignsay emay puay orfay irstfay odingcay hallengecay

Output: Sign me up for first coding challenge
*/

// Get a sentence in English with no punctuation nor special characters.
echo "Enter a sentence in English with no punctuation nor special characters." . PHP_EOL;
$input = (strtolower(trim(fgets(STDIN))));

// Turn the string into an array

$input_array = explode(" ", $input);

// get the first letter of each element
$string = 0;
foreach($input_array as $key => $value) {
	$word_length = strlen($value);
	
	$first_letter = $value[0];
	
	$word = substr($value, 1, $word_length);
	
	$new_word = $word . $first_letter ."ay ";

	$string .= $new_word;	
}

$string = substr($string, 1);
echo (ucfirst($string));



?>