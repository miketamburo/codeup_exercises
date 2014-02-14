<?php
/* You are at a party, your guests are getting hungry and you, as a good host, 
would like to order some pizza for them. The problem is that you don't know how 
many slices each person eats, neither how many large, medium or small pizzas to order. 
So you go and ask around your guests to find out who eats 
1 slice of pizza, 2 slices of pizza, 3 slices of pizza or 4 slices of pizza. 
For the sake of this problem, your guests don't eat more than 4 slices of pizza...

These are the sizes of the pizzas
*/
$large = 8;
$medium = 6;
$small = 4;
$reqSmall = 0;
$reqMed = 0;
$reqLar = 0;

echo "The Great Pizza Calculator" . PHP_EOL;

echo "How many guests eat only 1 slice of pizza:" . PHP_EOL;
$one_slice = fgets(STDIN);

echo "How many guests eat 2 slices of pizza:" . PHP_EOL;
$two_slice = (fgets(STDIN)*2);

echo "How many guests eat 3 slices of pizza:" . PHP_EOL;
$three_slice = (fgets(STDIN)*3);

echo "How many guests eat 4 slices of pizza:" . PHP_EOL;
$four_slice = (fgets(STDIN)*4);

$total_slices = ($one_slice + $two_slice + $three_slice + $four_slice);

// calculate the number of pizzas required
do {
	if ($total_slices <= 4) {
	$reqSmall = 1;
	$total_slices = 0;

	} elseif ($total_slices > 4 && $total_slices <= 6){
	$reqMed = 1;
	$total_slices = 0;

	} elseif ($total_slices > 6 && $total_slices <= 8) {
	$reqLar = 1;
	$total_slices = 0;

	} elseif ($total_slices > 8) {
	$answer = ($total_slices / 8);
	$reqLar = round($answer, 0, PHP_ROUND_HALF_DOWN);
	$total_slices = (($total_slices / 8) - $reqLar); 
	}

} while ($total_slices != 0);

echo "Large Pizzas: $reqLar" . PHP_EOL;
echo "Medium Pizzas: $reqMed" . PHP_EOL;
echo "Small Pizza: $reqSmall" . PHP_EOL;








?>