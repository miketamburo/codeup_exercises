<?php

// Morse Code 2.0
// Turn Morse Code into English

// Get the Morse Code
echo "Please enter your Morse Code.  Use '/' instead of spaces." . PHP_EOL;
$input_code = (strtoupper(trim(fgets(STDIN))));
$code_length = strlen($input_code);
$word = 0;
$index = 0;

for ($i=$index; $i<=$code_length; $i++){

	if ((substr($input_code, $i)) !== " "){
		$word .= (substr($input_code, $index, $i-1));
	} else {
		echo " ";

	}

	switch($word){
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
	$index = $i;

}

?>