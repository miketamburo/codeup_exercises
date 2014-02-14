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
    foreach ($list as $key => $thing) {
        $newIdex = $key + 1;
        // Display each item and a newline
        $string .= "[{$newIdex}] $thing " . PHP_EOL;
    // DO NOT USE ECHO, USE RETURN
    }
        return $string;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {
// change the first character to Upper case from trim(fgets(STDIN))
    $input = ucwords(trim(fgets(STDIN)));

    return $upper ? strtoupper($input) : $input;

}

function read_and_add_file($items, $filename) {
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    $contents_array = explode("\n", $contents);

    $items = array_merge($items, $contents_array);
        return array_values($items);
}

function save_file($items, $filename) {
   
    if (file_exists($filename)) {
        echo "The file $filename exists.  Comfirm you want to replace the file." . PHP_EOL;
        $answer = get_input(TRUE);
        if ($answer == "YES" || $answer == "Y"){
            $handle = fopen($filename, "w");
            $item = implode("\n", $items);
            fwrite($handle, $item);
      
            fclose($handle);
            return $items;
        }

    } else {
        echo "The file $filename does not exist.  Confirm you wish to create it: (Y)es or (No) " . PHP_EOL;
        $answer = get_input(TRUE);
        if ($answer == "YES" || $answer == "Y") {
            $handle = fopen($filename, "w");
            $item = implode("\n", $items);
            fwrite($handle, $item);
      
            fclose($handle);
            return $items;
        } 
    } return $items;
}


// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (O)pen file, (R)emove item, (S)ort, sa(V)e file, (Q)uit : ' . PHP_EOL;

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
            echo 'Enter item: ';
            $item = get_input();       
        if (!empty($items)) {
            echo "Would you like to add it to the (B)eginning or (E)nd of the list? " . PHP_EOL;
            $option = get_input(TRUE);

            if ($option == 'B') {
                array_unshift($items, $item);

            } elseif ($option == 'E') {
                array_push($items, $item);

            } else {
                array_push($items, $item);
            }
        } else {
            $items[] = $item;
        }
    
    } elseif ($input == 'O') { 
        // Open a file
        echo 'Enter the path and file name you wish to open: ';
        $file_path = get_input();
        $items = read_and_add_file($items, $file_path);         

    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input(TRUE);
        $newIndex = $key - 1;
        // Remove from array
        unset($items[$newIndex]);
        $items = array_values($items);
    } elseif ($input == 'V') { 
        // Open a file
        echo 'Enter the path and file name you wish to save: ';
        $file_path = (strtolower(get_input()));
        $items = save_file($items, $file_path);  

    } elseif ($input == 'S') {
        // Sort the list
        // sort_menu($items);
        echo "How would you like to sort your item list? " . PHP_EOL;
        echo "(A) - Z or (Z) - A " . PHP_EOL;
        $input = get_input(TRUE);
          
        if ($input == 'A') {
            sort($items);   

        } elseif ($input == 'Z') {
            rsort($items);
        } elseif ($input == 'F') {
            array_unshift($items);
        } elseif ($input == 'L') {
            array_pop($items);
        }
    } elseif ($input == 'F') {
            array_shift($items);
        
    } elseif ($input == 'L') {
            array_pop($items);
    }  
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!" .PHP_EOL;

// Exit with 0 errors
exit(0);