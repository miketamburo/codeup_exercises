<?php

// Morse Code 2.0
// Turn Morse Code into English

// Get the Morse Code
echo "Please enter your Morse Code.  Use '/' instead of spaces." . PHP_EOL;
$input_code = (strtoupper(trim(fgets(STDIN))));

// echo (substr($input_code, 0, 1)) . PHP_EOL;
// 	echo (substr($input_code, 1, 1)) . PHP_EOL;
// 		echo (substr($input_code, 2, 1)) . PHP_EOL;
// 			echo (substr($input_code, 3, 1)) . PHP_EOL;
// 				var_dump((substr($input_code, 3, 1))) . PHP_EOL;
// 					echo (substr($input_code, 5, 1)) . PHP_EOL;



$code_length = strlen($input_code);
$word = 0;
$index = 0;
$generated_letter = 0;
$letter = 0;

while ($index <= $code_length){
	for ($i=$index; $i<=$code_length; $i++){
		if ($letter !== " "){
			$letter = (substr($input_code, $i, 1));
			$generated_letter .= $letter;
		} elseif ($letter === "/") {
			echo " ";
		} 
	}
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
	$index = $i+1;
}
	echo "\n";

?>