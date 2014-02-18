<?php
function look_up($generated_letter){
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
						continue;
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
		echo "\n"; 
		// $generated_letter = 0;
		// $letter = " ";
}

// Morse Code 2.0
// Turn Morse Code into English

// Get the Morse Code
echo "Please enter your Morse Code.  Use '/' instead of spaces between words." . PHP_EOL;
$input_code = (strtoupper(trim(fgets(STDIN))));
$input_array = explode(" ", $input_code);

$code_length = strlen($input_code);

$new_array = array();

foreach($input_array as $key=>$value){
	echo $value;
	$string = $value;
	echo $string;
	look_up($string);
	echo "\n";
	// if (array_search("/", $input_array)) {
	// 	$new_array = explode("/", $value);
	// 		foreach ($new_array as $key2 => $value2) {
	// 			look_up($value2);
	// 			echo "\n";
	// 		}	
	// }
	// var_dump($new_array);
}

// $generated_letter = 0;
// $letter = (substr($input_code, 0));

// do {
// for ($i=0; $i<=$code_length; $i++){
// 			$letter = (substr($input_code, $i, 1));
// 			echo $letter;
// 			echo $i;
// 		if ($letter !== " "){
// 			var_dump($letter);
// 			$generated_letter .= $letter;
			
// 			$generated_letter = (trim($generated_letter));
			

// 		} elseif ($letter === "/") {
// 			echo " ";

// 		} elseif ($letter == " ") {
		
// 			echo "\n";
// 			echo $i;
// 			look_up($generated_letter);
			
// 			$input_code = (trim(substr($input_code, $i)));
// 			$code_length = strlen($input_code);
// 			print_r($input_code);
// 			print_r($code_length);

// 			$i = 0;
		
			

// 		} elseif ($i == $code_length){
// 			echo "third";
// 			look_up($generated_letter);
// 			$input_code = (substr($input_code, $i));
// 			$code_length = strlen($input_code);
// 			var_dump($input_code);

// 			// $generated_letter = $input_code;


// 		}
// }
// // Need to assign new $input_code value so first $generated_letter is removed from entire string.


// // maybe make this a function????

// } while ($i<=$code_length);				

echo "\n";

?>