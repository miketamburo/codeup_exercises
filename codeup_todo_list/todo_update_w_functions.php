<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list) {
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    $string = '';
    foreach ($list as $key => $item) {
        $newIdex = $key + 1;
        // Display each item and a newline
        $string .= "[{$newIdex}] $item " . PHP_EOL;
    // DO NOT USE ECHO, USE RETURN
    }
        return $string;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {

    $input = trim(fgets(STDIN));

    return $upper ? strtoupper($input) : $input;

}
// Get STDIN, strip whitespace and newlines
// and sort the list as desired
// function sort_menu() {

//     echo "How would you like to sort your item list? " . PHP_EOL;
//     echo "(A) - Z or (Z) - A " . PHP_EOL;
//     $input = get_input(TRUE);
//             $list = '';
//         if ($input == 'A') {
//             $list = sort($items);
            

//         } elseif ($input == 'Z') {
//             $list = rsort($items);
            
//         }
// }


// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort, (Q)uit : ' . PHP_EOL;

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input(TRUE);
        $newIndex = $key - 1;
        // Remove from array
        unset($items[$newIndex]);
        $items = array_values($items);
    } elseif ($input == 'S') {
        // Sort the list
        // sort_menu($items);
        echo "How would you like to sort your item list? " . PHP_EOL;
        echo "(A) - Z or (Z) - A " . PHP_EOL;
        $input = get_input(TRUE);
          
        if ($input == 'A') {
            $list = sort($items);   

        } elseif ($input == 'Z') {
            $list = rsort($items);
        }
    }    
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!" .PHP_EOL;

// Exit with 0 errors
exit(0);