<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function checkVariable($variable_name) {
	if (isset($variable_name)) {
		echo "The variable is SET.\n";
	} elseif (empty($variable_name)){
		echo "The variable is EMPTY.\n";
	} else {
		echo "I don't know what to do with your inputs.";
	}
}	

// TEST: If var $nothing is set, display '$nothing is SET'
echo "Checking variable \$nothing.\n";
checkVariable($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'
echo "Checking variable \$something.\n";
checkVariable($something);

// Serialize the array $array, and output the results
echo "Serialize the array.\n";
$serialize = serialize($array);
var_dump($serialize);

// Unserialize the array $array, and output the results
echo "Unserialize the array.\n";
$deserialize = unserialize($serialize);
var_dump($deserialize);



?>