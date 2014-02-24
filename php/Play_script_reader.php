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


// Welcome the straving actor
echo "Welcome to the script Script" . PHP_EOL;

// Get the name of the play that they are acting in
echo "Please enter the number of the script you wish to use." . PHP_EOL;
echo "(1) The Importance of Being Earnest\n(2) Much Ado About Nothing\n(3) Pygmalion";
echo "\n";
$scriptChoice = (trim(fgets(STDIN)));
if ($scriptChoice == 1) {
	$script = 'challenges_data/earnest.txt';
} elseif ($scriptChoice == 2) {
	$script = 'challenges_data/muchado.txt';
} elseif ($scriptChoice == 3) {
	$script = 'challenges_data/pygmallion.txt';
}


// Get their character name
echo "Please enter the name of your character as it is entered in the script for character cue.  For example:  Algernon Moncrieff is Algernon." . PHP_EOL;

$character_name = ucfirst(strtolower(trim(fgets(STDIN))));
$matches = array();

// Open the play's text file
$filename = $script;
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$contents_array = explode(' ', $contents);

// var_dump($contents);
// var_dump($character_name);

$result = preg_match("/($character_name) (.+)/", $contents, $matches);
var_dump($matches);


// Convert the play to a searchable format (as needed)




// Phase 1 print only his lines



// Phase 2 print preceding actor and actor's lines



// Phase 3 Add stage directions (entrances and exits, as well as the act and scene numbers your friend is in)






exit(0);
?>

