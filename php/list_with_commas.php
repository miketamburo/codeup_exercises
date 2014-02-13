<?php

//Use the $physicists_array
$physicists_array = array('Gordon Freeman', 'Samantha Carter', 'Sheldon Cooper', 'Quinn Mallory', 'Bruce Banner', 'Tony Stark');
// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


function humanized_list($input, $sort = false) {
	$explode = explode(',', $input);
	$end_name = array_pop($explode);
	
		if ($sort == true){
		sort ($explode);
		}
	$new_string_name = (implode(',', $explode)) . ", and{$end_name}";
	return $new_string_name;
}


// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, TRUE);
 
echo "Some of the most famous fictional theoretical physicists are{$famous_fake_physicists}." . PHP_EOL;


?>