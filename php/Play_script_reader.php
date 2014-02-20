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
echo "Please enter the path and name of the file you wish to use." . PHP_EOL;
$script = (trim(fgets(STDIN)));

// Get their character name
echo "Please enter the name of your character as it is entered in the script for character cue.  For example:  Algernon Moncrieff is Algernon." . PHP_EOL;

$character_name = "/" . (ucfirst(strtolower(trim(fgets(STDIN)))) . "./");


// Open the play's text file
$filename = $script;
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$contents_array = explode(space, $contents);

var_dump($contents);
var_dump($character_name);

$result = preg_match($character_name, $contents);
var_dump($contents_array);


// Convert the play to a searchable format (as needed)




// Phase 1 print only his lines



// Phase 2 print preceding actor and actor's lines



// Phase 3 Add stage directions (entrances and exits, as well as the act and scene numbers your friend is in)






exit(0);
?>

