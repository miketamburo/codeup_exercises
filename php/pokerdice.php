<?php

// function to take user input on STDIN
// performing stringtoupper if $upper is true
function getInput($upper = false) {
	$input = trim(fgets(STDIN));
    return $upper ? strtoupper($input) : $input;
}
// generate an array of 5 dice
// each die should have a random roll between 1 and 6
// sort the dice before returning
function rollDice() {
	$dice = [];
	for ($i=0; $i<5; $i++){
		$roll = mt_rand(1, 6);
		array_push($dice, $roll);
	}	
	sort($dice);
	return $dice;
}
// show the dice array
// output should be in the format...
// Dice: 1 2 3 4 5
function showDice($dice) {
	echo "Dice: ";
	foreach($dice as $key => $value){
		echo "$value ";
	}
	echo "\n";
}
// determine the type of roll, the base score, and the bonus
// for a given array of dice
function scoreRoll($dice) {
	// base score is a sum of all dice
	$base_score = array_sum($dice);
	// hand type and bonus point system
	// five of a kind = 100
	// four of a kind = 75
	// a full house (3oaK, 2oaK) = 50
	// a straight(65432) = 40
	// three of a kind = 25
	// two pair = 15
	// a pair = 5
	// nada = 0
	$arrayCt = array_count_values($dice);
	var_dump($arrayCt);
		switch (count($arrayCt)) {
			case 5:
				// check for straight (no "1" in line-up)
					if ($dice[0] != 1){
						$bonus = 40;
						$type = "Stright";
					} else {
						$bonus = 0;
						$type = "nada";
					}
				break;
			case 4:
				// one pair bonus is 5 pts
				$bonus = 5;
				$type = "A pair";
				break;
			case 3:
				// 2 pairs or 3 of kind
				// if no value = 3 (false) then 2 pairs worth 15 pts
				// if value = 3 then 3 of a kind = 25 pts
				$search = array_search(3, $arrayCt);
				
					if ($search == FALSE){
						$bonus = 15;
						$type = "Two pairs";
					} else {
						$bonus = 25;
						$type = "Three of a kind";
					}
				break;
			case 2:
				// 4 of kind or full house
				// if no value = 4 (false) then its a full house worth 50 pts
				// if value = 4 then 4 of a kind worth 75 pts
				$search = array_search(4, $arrayCt);
				var_dump($search);
					if ($search == FALSE){
						$bonus = 50;
						$type = "Full House";
					} else {
						$bonus = 75;
						$type = "Four of a kind";
					}
				break;
			case 1:
				// five of a kind worth 100 pts
				$bonus = 100;
				$type = "Five of a kind";
				break;

			default:
				$bonus = 0;
				$type = "nada";
				break;
		}
	// generate a result in the following data structure
	$result = ['type' => $type, 'base_score' => $base_score, 'bonus' => $bonus];
	// return the result

	return $result;
}

// add an entry to the history log to keep track
// of how many rolls there have been of a given type
// sort history with highest occurring type first
function logHistory(&$history, $type) {
	// todo
}

// display stats from history log based on number of rolls
// desired display format:
// >> STATS ------------
// a pair: 47.47 %
// two pair: 23.67 %
// three of a kind: 15.43 %
// a straight: 7.42 %
// a full house: 3.77 %
// four of a kind: 2.24 %
// << STATS -------------
function showStats($history, $totalRolls) {
	echo ">> STATS ------------\n";
	// todo
	echo "<< STATS -------------\n";
}

// track the total score
$score = 0;

// track the total rolls
$rolls = 0;

// track the roll type history
$history = [];

// welcome the user
echo "Welcome to Poker Dice!\n";
echo "Press enter to get started with your first roll...\n";

$input = getInput(true);

while ($input != 'Q') {

	// roll the dice
	$rollV = rollDice();

	// score the result
	// todo: use scoreRoll function

	// add the current roll to the total score
	// todo

	// log the roll type history
	// todo: use logHistory function

	// show the dice
	showDice($rollV);

	// display roll type, base score, and bonus
	// ex: You rolled a straight for a base score of 20 and a bonus of 40.
	// todo
	
	// display total score
	// ex: Total Score: 32306, in 849 rolls.
	$score = scoreRoll($rollV);
	var_dump($score);
	// show roll type statistics
	// todo: use showStats function

	// prompt use to roll again or quit
	echo "Press enter to roll again, or Q to quit.\n";
	$input = getInput(true);
}

?>