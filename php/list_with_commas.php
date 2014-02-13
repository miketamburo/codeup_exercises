<?php

//Use the $physicists_array
$physicists_array = array('Gordon Freeman', 'Samantha Carter', 'Sheldon Cooper', 'Quinn Mallory', 'Bruce Banner', 'Tony Stark');
function computerized_list($string) {
	$new_array_name = explode(',', $string);
	return $new_array_name;
}

// Converts array into list n1, n2, ..., and n3
function humanized_list($array) {
	// Find the last name of the array.
	$end_name = array_pop($array);
	
	$new_string_name = (implode(',', $array)) . ", and{$end_name}";
	return $new_string_name;
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list(computerized_list($physicists_string));



// Output sentence
echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists.";

?>



