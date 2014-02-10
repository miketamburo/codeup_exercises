<?php

// Use the following array to complete the practice exercises

$things = array ('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// construct the foreach loop

foreach ($things as $thing) {
		
		if (is_int($thing)) {
		echo "{$thing} is an integer.\n";
		}

		if (is_float($thing)) {
		echo "{$thing} is a float.\n";
		}

		if (is_bool($thing)) {
		echo "{$thing} is a boolean.\n";
		}
	
		if (is_null($thing)) {
		echo "{$thing} is of type null.\n";
		}

		if (is_string($thing)) {
		echo "{$thing} is a string.\n";
		}

		if (is_array($thing)) {
		echo "{$thing} is an Array.\n";
		foreach ($thing as $array_value) {
		// Add all of the checks back in to test the array
			if (is_int($thing)) {
			echo "{$thing} is an integer.\n";
			}

			if (is_float($thing)) {
			echo "{$thing} is a float.\n";
			}

			if (is_bool($thing)) {
			echo "{$thing} is a boolean.\n";
			}
	
			if (is_null($thing)) {
			echo "{$thing} is of type null.\n";
			}

			if (is_string($thing)) {
			echo "{$thing} is a string.\n";
			}

			if (is_array($thing)) {
			echo "{$thing} is an Array.\n";
			}
		// End of all array checks	
		}	
		}
}

exit(0);

?>