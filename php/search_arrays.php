<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function to compare 2 arrays that returns the number of values in common.

// Create a function that returns TRUE or FALSE
function find_it ($query, $names) {

	return (array_search($query, $names) !== FALSE) ? TRUE : FALSE;
}

function compare ($names, $compare) {
	$names_in_common = 0;
	foreach ($names as $key => $value) {
		
		find_it($value, $compare);

		if (find_it($value, $compare) !== FALSE) {
			$names_in_common = $names_in_common + 1;
		}
		// test it -- remove after code review
		// var_dump(find_it($value, $compare));
	}
			echo "Matching names = $names_in_common" . PHP_EOL;
}
	

find_it('Tina', $names);
find_it('Bob', $names);

compare ($names, $compare);
	
?>


