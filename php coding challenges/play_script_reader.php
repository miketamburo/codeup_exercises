<?php 

/* The Script Script 
A friend of yours is an aspiring actor, and like most 
Starbucks baristas (achem - actors), he doesn't exactly have 
a lot of money to spend on printing out long scripts. Instead, 
he'd rather just print only his lines from the play. Since you're 
now a rockstar developer, he came to you for help. Write a script 
to help him edit his scripts. You're program should take in the name 
of his character, open the script text, and output only the lines for 
his character.
*/
$matches = array();
// Welcome the straving actor
echo "Welcome to the script Script" . PHP_EOL;

// Get the name of the play that they are acting in
do {
echo "Please enter the number of the script you wish to use." . PHP_EOL;
echo "(1) The Importance of Being Earnest\n(2) Much Ado About Nothing\n(3) Pygmalion";
echo "\n";
$scriptChoice = (trim(fgets(STDIN)));

	if ($scriptChoice == '1') {
		$filename = 'challenges_data/earnest.txt';
		break;
	} elseif ($scriptChoice == '2') {
		$filename = 'challenges_data/muchado.txt';
		break;
	} elseif ($scriptChoice == '3') {
		$filename = 'challenges_data/pygmallion.txt';
		break;
	} 

} while ($scriptChoice != '1' || $scriptChoice != '2' || $scriptChoice != '3');

// Get their character name
echo "Please enter the name of your character as it is entered in the script for character cue.\nFor example:  Algernon Moncrieff is Algernon." . PHP_EOL;

$character_name = ucfirst(strtolower(trim(fgets(STDIN))));

// Open the play's text file
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

// Convert the play to a searchable format (as needed)
$contents_array = explode("\n", $contents);
// var_dump($contents_array);

// Phase 1 print only his lines
$matchesFile = preg_grep("/^$character_name./", $contents_array);
// foreach($matchesFile as $key=>$value){
// 	if ($value != ' '){
// 		echo $matchesFile[$key] . PHP_EOL;
// 	}
// }












// Phase 2 print preceding actor and actor's lines



// Phase 3 Add stage directions (entrances and exits, as well as the act and scene numbers your friend is in)

// $matchesFile = preg_grep("/^ACT/", $contents_array);

// var_dump($matchesFile);//remove 'ACT DROP'




exit(0);
?>

