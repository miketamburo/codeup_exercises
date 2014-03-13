<?php
/* In 1995, technology author Arnold G. Reinhold came up with one of the 
mostly highly regarded schemes for developing secure passwords: diceware. 
The problem with most passwords is that they are based off of a single word 
which an attacker can easily guess, or it's based on a series of random 
characters with we as humans have trouble remembering. Diceware solves these 
problems but creating passphrases with multiple random words or phrases so 
they are both difficult to guess but easy to remember.

Mr. Reinhold published a list of 7,776 words (included in this directory). 
These words are index by a series of five digit numbers, consisting of the 
digits 1 - 6. Using this, a person would roll five dice to generate an index 
and lookup a unique word on the list. The person could then do this as many 
times as he or she wished to generate their passphrase (5 words was generally 
considered to be proficient, having security roughly comparable to a password 
with 11 random characters).

Your task is to automate this process. Your user will tell the application 
how many words she wants to generate (using either $argv or fgets(STDIN)), 
your application will then ingest diceware.wordlist.txt and generate as many 
indexes as the user requested. Using those indices the program will lookup 
the relevant words and then output them out to the user before exiting.
*/

// Ask the user how many words do you want to generate


echo "Welcome to Diceware" . PHP_EOL;
echo "How many words would you like to generate? Please enter a number." . PHP_EOL;
$num_of_words_required = (strtolower(trim(fgets(STDIN))));

// Open the reference file and import the key into an array

$filename = "diceware_wordlist.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$dice_key = explode("\n", $contents);


// Generate random numbers for each word - Let's Roll

$index = 1;
$generated_word = 0;
$generated_array = array();


While ($index <= $num_of_words_required) {
	for($i = 0; $i <= 4; $i++) {
		$number_generated = intval(rand(1, 6));
		$generated_word .= $number_generated;
	}

	$index++;

	$look_up_Num = (substr($generated_word, 1));

// edit the diceware array file into numbers and values
	foreach($dice_key as $key => $value) {
		$new_array = explode("\t", $value);	

		$dice_key = array($new_array);
	
		foreach ($dice_key as $key2 => $value2) {
			$decoded_word = 0;
				if (in_array($look_up_Num, $value2)){
				$decoded_word = $value2[($key2 + 1)];
					echo $decoded_word . " ";	
			}

		}
	}
	$generated_word = 0;
	$dice_key = explode("\n", $contents);
}
echo "\n";

?>