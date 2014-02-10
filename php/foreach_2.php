<?php

// Control Structures II
// Using foreach loops with keys and values

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
// Run the foreach loop

foreach ($books as $key => $value){
	// $key is the name of the imbedded array as well as the key for the parent array
	// $value is the value assigned to each key of the parent array
	//echo "$key\n"; commented out for part 3 of exercise
		foreach ($value as $key2 => $value2) {
			// $key2 is the key of the child array and $value2 is the value assigned to the key
			if ($key2 == 'published' && $value2 >= 1950){
			echo "$key was published in $value2\n";
			}
		}
	}

exit(0);


?>