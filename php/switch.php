<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
// $day_of_week = date('N');
$day_of_week = rand(1, 7);
$weekend_marker = 0;

switch($day_of_week) {
    case 1:
        echo "Monday\n";
        break;
    case 2: 
        echo "Tuesday\n";
        break;
    case 3:
    	echo "Wednesday\n";
        break;
    case 4:
    	echo "Thursday\n";
        break;
    case 5:
    	echo "Friday\n";
        break;
    case 6:
    	echo "Saturday\n";
    	$weekend_marker = 1;
        break;
    case 7:
    	echo "Sunday\n";
    	$weekend_marker = 1;
        break;

    default:
    	echo "default";
}    
//  echo $day_of_week;	
if ($day_of_week >= 6) {
	echo "Welcome the weekend!\n";
}    
  	
?>