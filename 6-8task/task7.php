<?php
function removeDuplicates($array) {
    // Use array_flip and array_values to remove duplicates
    $array = array_values(array_flip($array));
    return $array;
}

$array1 = array(2, 4, 7, 4, 8, 4);

echo "Before removing duplicates: ";
print_r($array1);

$array1 = removeDuplicates($array1);

echo "After removing duplicates: ";
print_r($array1);
?>