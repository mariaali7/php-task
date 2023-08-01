<?php
function findLowestNonZeroInteger($array) {
    $lowestInteger = null;

    foreach ($array as $value) {
        if ($value !== 0) {
            if ($lowestInteger === null || $value < $lowestInteger) {
                $lowestInteger = $value;
            }
        }
    }

    return $lowestInteger;
}

// Sample Input
$array1 = array(2, 0, 10, 12, 6);

// Sample Output
$lowestInteger = findLowestNonZeroInteger($array1);
echo "Sample Output: " . $lowestInteger;
?>