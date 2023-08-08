<?php
class ArraySorter {
    public function sortArray($array) {
        sort($array);
        return $array;
    }
}

// Create an instance of ArraySorter
$sorter = new ArraySorter();

// Sample array
$array = array(11, -2, 4, 35, 0, 8, -9);

// Sort the array
$sortedArray = $sorter->sortArray($array);

// Display the sorted array
print_r($sortedArray);
?>