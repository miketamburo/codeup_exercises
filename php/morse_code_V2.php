<?php

// Morse Code 2.0
// Turn Morse Code into English

// Get the Morse Code
echo "Please enter your Morse Code.  Use '/' instead of spaces between words." . PHP_EOL;
$input_code = (strtoupper(trim(fgets(STDIN))));

$code_length = strlen($input_code);

$generated_letter = 0;
$letter = 0;

do {
for ($i=0; $i<=$code_length; $i++){
		if ($letter !== " "){
			$letter = (substr($input_code, $i, 1));
			$generated_letter .= $letter;

		} elseif ($letter === "/") {
			echo " ";
		} elseif ($letter === " " || $letter == false){
			$input_code = (substr($input_code, $i));
			$code_length = strlen($input_code);
			var_dump($input_code);

// need to start from zero with new code length and $input_code
		}
}
// Need to assign new $input_code value so first $generated_letter is removed from entire string.
			$generated_letter = (trim($generated_letter));
			$generated_letter = (substr($generated_letter, 1));

				switch($generated_letter){
					case '-':
						echo "T";
						break;
					case '--':
						echo "M";
						break;
					case '---':
						echo "O";
						break;
					case '--.':
						echo "G";
						break;
					case '--.-':
						echo "Q";
						break;
					case '--..':
						echo "Z";
						break;
					case '-.':
						echo "N";
						break;
					case '-.-':
						echo "K";
						break;
					case '-.--':
						echo "Y";
						break;
					case '-.-.':
						echo "C";
						break;
					case '-..':
						echo "D";
						break;
					case '-..-':
						echo "X";
						break;
					case '-...':
						echo "B";
						break;
					case '-':
						echo "E";
						break;
					case '.-':
						echo "A";
						break;
					case '.--':
						echo "W";
						break;
					case '.---':
						echo "J";
						break;
					case '.--.':
						echo "P";
						break;
					case '.-.':
						echo "R";
						break;
					case '.-..':
						echo "L";
						break;
					case '..':
						echo "I";
						break;
					case '..-':
						echo "U";
						break;
					case '..-.':
						echo "F";
						break;
					case '...':
						echo "S";
						break;
					case '...-':
						echo "V";
						break;
					case '....':
						echo "H";
						break;

					case '-----':
						echo "0";
						break;
					case '----.':
						echo "9";
						break;
					case '---..':
						echo "8";
						break;
					case '--...':
						echo "7";
						break;
					case '-....':
						echo "6";
						break;
					case '.----':
						echo "1";
						break;
					case '..---':
						echo "2";
						break;
					case '...--':
						echo "3";
						break;
					case '....-':
						echo "4";
						break;
					case '.....':
						echo "5";
						break;

					case '---...':
						echo ":";
						break;
					case '--..--':
						echo ",";
						break;
					case '-.--.-':
						echo ")";
						break;
					case '-.--.-':
						echo "(";
						break;
					case '-.-.--':
						echo "!";
						break;
					case '-.-.-.':
						echo ";";
						break;
					case '-..-.':
						echo "/";
						break;
					case '-...-':
						echo "=";
						break;
					case '-....-':
						echo "-";
						break;
					case '.-.-.':
						echo "+";
						break;
					case '.-.-.-':
						echo ".";
						break;
					case '.-..-.':
						echo '"';
						break;
					case '.-...':
						echo "&";
						break;
					case '..--.-':
						echo "_";
						break;
					case '..--..':
						echo "?";
						break;
					case '...-..-':
						echo "$";
						break;
				}
		$generated_letter = 0;

} while ($i<=$code_length);				

echo "\n";

?>