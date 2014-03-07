<?php
// 99 Bottles of Beer


/*99 bottles of beer on the wall, 99 bottles of beer.
Take one down and pass it around, 98 bottles of beer on the wall.

1 bottle of beer on the wall, 1 bottle of beer.
Take one down and pass it around, no more bottles of beer on the wall.
No more bottles of beer on the wall, no more bottles of beer. 
Go to the store and buy some more, 99 bottles of beer on the wall.
*/

for ($i=99; $i>=1; $i--){
	$ni = $i-1;
	if ($ni === 0){
		$ni = "no more bottles ";
		$new_statement = ucfirst($ni) . "of beer on the wall, $ni of beer.  Go to the store and buy somme more, 99 bottles of beer on the wall." . PHP_EOL;
		echo $new_statement;
	} else {
	echo "$i bottles of beer on the wall, $i bottles of beer.  Take one down and pass it around, $ni bottles of beer on the wall." . PHP_EOL;
	
	}
}


?>