<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Sort the array in ascending order based on keys
ksort($fruits);

// Display the sorted array
foreach ($fruits as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}
?>
