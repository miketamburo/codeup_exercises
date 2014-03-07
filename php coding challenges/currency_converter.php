<?php
// Currency Converter (2 points)

$total = 0;

// User will enter the amount of money in US dollars and choose the currency they want to convert it to
echo "Enter the amount that you want to covert: $" . PHP_EOL;
$amount = (trim(fgets(STDIN)));

echo "What currency do you want to convert to? (E)uros, (P)esos, (B)ritish Pounds." . PHP_EOL;
$currency = (strtoupper(trim(fgets(STDIN))));

if ($currency == 'E') {
	$total = $amount * .73;
	$currency_name = 'euros';
} elseif ($currency == 'P') {
	$total = $amount * 13;
	$currency_name = 'pesos';
} elseif ($currency == 'B') {
	$total = $amount * .60;
	$currency_name = 'pounds';
}

echo "\n$amount is equivalent to $total $currency_name" . PHP_EOL;

?>