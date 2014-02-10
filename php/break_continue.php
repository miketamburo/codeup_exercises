<?php
// Create a for loop that shows all even numbers between 1 and 100

for ($i = 1; $i < 101; $i++) {
	if ($i % 2 != 0) {
		continue;
	}
		echo $i . "\n";
}


?>
