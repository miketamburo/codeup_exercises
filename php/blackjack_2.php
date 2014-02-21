<?php

// blackjack game

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];

// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

// build a deck (array) of cards
$eachCard = array();
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
	$new_deck = array();
	$worth = 0;
	foreach($cards as $key => $card){
	// rotate through each card and assign a suit, a value, and determine if its an ace	
		for ($i=0; $i<=3; $i++){
			$suit = $suits[$i];
			if ($card === 'A') {
				$worth = 11;
				$isAce = TRUE;
			} elseif ($card === 'J' || $card === 'Q' || $card === 'K') {
				$worth = 10;
				$isAce = FALSE;
			} else {
				$worth = intval($card);
				$isAce = FALSE;
			} 
			// created an associative array 
			$eachCard = ['name' => $card, 'value' => $worth,  'suit' => $suit];
			$new_deck[] = $eachCard;	
		}
	}
		// shuffle the cards in the deck
		shuffle($new_deck);

		return $new_deck;
}

// get total value for a hand of cards
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
	$hand_worth = 0;
	$numOfAce = 0;

	foreach ($hand as $key => $card){
		$hand_worth += $card['value'];
		if ($card['name'] == 'A') {
			$numOfAce++;
		}

		While ($hand_worth > 21) {
			if ($numOfAce != 0){
				$hand_worth = $hand_worth - 10;
				$numOfAce--;
			} 
		}
	}
		return $hand_worth;
}

// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) {
	$string = " ";
	foreach ($hand as $key => $card){
		if ($hidden == true) {
			$string = ("[" . $card['name'] . " " . $card['suit'] . "] ");
			break;
		} else {
			$string .= ("[" . $card['name'] . " " . $card['suit'] . "] ");
		}	
	}
	echo $name . "'s Hand: " . $string . " " . PHP_EOL;
}
// Welcome the user and get their name

echo "Welcome to Vegas Blackjack. " . PHP_EOL;
echo "Please enter your name: ";
$name = (trim(fgets(STDIN)));

echo PHP_EOL . "Let's play!" . PHP_EOL;

// build the deck of cards
$shuffled_deck = buildDeck($suits, $cards);

// initialize a dealer and player hand
$dealer = [];
$player = [];

// Start the game -- dealer and player each draw two cards
for ($i=0; $i<2; $i++){
	$dealer[] = array_pop($shuffled_deck);
	$player[] = array_pop($shuffled_deck);
}

// echo the dealer hand, only showing the first card
echoHand ($dealer, 'Dealer', true) . PHP_EOL; 

// echo the player hand
echoHand ($player, $name, false);
$players_total = getHandTotal($player);

echo "Player's card total is " . $players_total . PHP_EOL;

if ($players_total == 21) {
	echo "LUCKY YOU!  YOU WIN!!!!!!";
	exit(0);
}

// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
while ($players_total < 21) {
	echo "Do you want to (H)it or (S)tay?" . PHP_EOL;
	// Get player's answer
	$answer = (strtoupper(trim(fgets(STDIN))));

	if ($answer === 'H' || $answer === 'HIT'){
				
		$player[] = array_pop($shuffled_deck);
		
		echoHand ($player, $name, false);

		$players_total = getHandTotal($player);
		echo PHP_EOL . "Player's card total is " . $players_total . PHP_EOL;

	} elseif ($answer === 'S' || $answer === 'STAY') {
		break;
	} 
	// at this point, if the player has more than 21, tell them they busted
	// otherwise, if they have 21, tell them they won (regardless of dealer hand)
	if ($players_total == 21) {
		echo "You win!" . PHP_EOL;
		exit (0);

	} elseif ($players_total > 21) {
		echo "\n BUST!!!!!!!!!" . PHP_EOL;
		exit(0);
	}
}

// show the dealer's hand (all cards)
echoHand ($dealer, 'Dealer', false) . PHP_EOL; 

$dealers_total = getHandTotal($dealer);
echo "Dealer's card total is " . $dealers_total . PHP_EOL;

do {
	if ($dealers_total < $players_total) {
		echo "\n Dealer takes a card. " . PHP_EOL;
		$dealer[] = array_pop($shuffled_deck);
		echo "\n";

		echoHand ($dealer, 'Dealer', false);
		$dealers_total = getHandTotal($dealer);
		echo "Dealer's card total is " . $dealers_total . PHP_EOL;
	} 
} while ($dealers_total <= 17);

$dealers_total = getHandTotal($dealer);

if ($dealers_total > 22) {
	echo "\n Dealer Busted!!!!!!!" . PHP_EOL;

} elseif ($dealers_total == 21 && $players_total != 21) {
	echo "\n Dealer WINS!!!!!!" . PHP_EOL;

} elseif ($dealers_total > $players_total) {
	echo "\n Dealer WINS!!!!!!" . PHP_EOL;

} elseif ($dealers_total == $players_total) {
	echo "The game is a push." . PHP_EOL;
}
exit(0);
?>