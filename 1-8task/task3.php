<?php
$color = array(4 => 'white', 6 => 'green', 11 => 'red');

// Get the keys of the array
$keys = array_keys($color);

// Get the first element using the first key
$firstElementKey = $keys[0];
$firstElementValue = $color[$firstElementKey];

// Display the first element
echo $firstElementValue;
?>