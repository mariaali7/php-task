<?php

function insertItemInArray($array, $location, $newItem) {
    // Check if the location is within the bounds of the array
    if ($location < 0 || $location > count($array)) {
        echo "Invalid location. The location should be between 0 and " . count($array) . PHP_EOL;
        return $array;
    }

    // Insert the new item into the array at the specified location
    array_splice($array, $location, 0, $newItem);

    return $array;
}

// Sample Input
$array = [1, 2, 3, 4, 5];
$location = 4;
$newItem = '$';

// Call the function and print the result
$result = insertItemInArray($array, $location, $newItem);
print_r($result);
?>  