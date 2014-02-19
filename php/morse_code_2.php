<?php

// Morse Code 2.0
// Turn Morse Code into English

function look_up($generated_letter){

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
}

// Get the Morse Code
echo "Please enter your Morse Code.  Use '/' instead of spaces between words." . PHP_EOL;
$input_code = (strtoupper(trim(fgets(STDIN))));

$input_array = explode("/", $input_code);

foreach($input_array as $key => $value){
	$converted_value_array = explode(" ", $value);

		foreach ($converted_value_array as $converted_letter) {
			look_up($converted_letter);
		}
	echo " ";
		
}
				

echo "\n";
exit(0);

?>