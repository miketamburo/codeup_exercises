<?php
// Get new instance of MySQLi object
$mysqli = @new mysqli('127.0.0.1', 'mike', 'password', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
} else {
	echo $mysqli->host_info . "\n";
}

// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(75) NOT NULL,
    description VARCHAR(600) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT(10, 2) NOT NULL,
    PRIMARY KEY (id)
);';

// Run query, if there are errors then display them
if (!$mysqli->query($query)) {
    throw new Exception("Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error);
}



?>