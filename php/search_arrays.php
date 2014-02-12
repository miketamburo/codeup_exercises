<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'cat';
// Create a function to compare 2 arrays that returns the number of values in common.
function compare ($array1, $array2) {
	
}

// Create a function that returns TRUE or FALSE
function find_it ($query, $names) {
	foreach ($names as $name) {

	return (array_search($query, $names)) ? TRUE : FALSE;
		// if (array_search($query, $names) !== FALSE) {
		// 	echo $name . PHP_EOL;
		// 	return $name;

		// 	break;
		// } else {
		// 	echo "The name wasn't found." . PHP_EOL;
		// 	return FALSE;
		// }
	}
}

find_it('Tina', $names);
find_it('Bob', $names);
	



