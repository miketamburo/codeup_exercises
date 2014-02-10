<?php

// Create array to hold list of todo items
$items = array();


// The loop!

do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        // use a switch to exclude array key = 0
       switch ($key) {  
            case 0:
            // echo "\n"; option to add a new line if desired
            break;

            default:      
        echo "[{$key}] {$item}\n";
    }
    }

    // Show the menu options
    echo "\n" . '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    // Used strtoupper to covert all user inputs to capital characters
    $input = (strtoupper(trim(fgets(STDIN))));


    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        // reserved key 0 of array
        $items[0] = array(0); 
        // Add user's input to array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);