<?php
// FACEBOOK test
// Take a set of integers, calculate the space between each and find the missing number
$input = "1 3 5 9 11";
$diff_array = [];
$input_array = explode(" ", $input);
// $sum = ceil((array_sum($input_array) / 6) / 5) * 2;
for ($i=1; $i < (count($input_array)); $i++){
	$diff = $input_array[$i]-$input_array[$i-1];
	$diff_array[] = $diff;
}
	var_dump($diff_array);
$diff_array = array_unique($diff_array);
$diff_count_array = array_count_values($diff_array);
$key = array_search(1, $diff_count_array);
var_dump($diff_array);
var_dump($diff_count_array);
echo $key;
// the missing number is the number following the key with the double int value.
// to calculate the missing number, it is the key value plus half the int value.
foreach ($diff_array as $value) {
	if ($value != 2){
		echo "The missing number is " . ($input_array[$key] + $value/2) . PHP_EOL;
	}
}
?>