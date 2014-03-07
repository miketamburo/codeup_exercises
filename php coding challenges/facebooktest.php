<?php
// FACEBOOK test
// Take a set of integers, calculate the space between each and find the missing number
$input = "1 6 16 21 26";
$diff_array = [];
$input_array = explode(" ", $input);

for ($i=1; $i < (count($input_array)); $i++){
	$diff = $input_array[$i]-$input_array[$i-1];
	$diff_array[] = $diff;
}

$diffValue = $diff_array[0];
foreach ($diff_array as $key => $value) {
	if ($value != $diffValue){
		echo "The interval is: " . $diffValue . " and the missing number is " . (($input_array[$key]) + $diffValue) . PHP_EOL;
	}
}


?>