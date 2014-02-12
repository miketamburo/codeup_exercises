<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function to compare 2 arrays that returns the number of values in common.



// Create a function that returns TRUE or FALSE
function find_it ($query, $names) {

	return (array_search($query, $names) !== FALSE) ? TRUE : FALSE;

		// if (array_search($query, $names) !== FALSE) {
		// 	echo $name . PHP_EOL;
		// 	return $name;
		// 	break;
		// } else {
		// 	echo "The name wasn't found." . PHP_EOL;
		// 	return FALSE;
		// }
	
}

function compare ($names, $compare) {
	foreach ($names as $key => $value) {
		find_it($value, $compare);
		var_dump(find_it($value, $compare));
	}
}
	



find_it('Tina', $names);
find_it('Bob', $names);

compare ($names, $compare);
	
?>


