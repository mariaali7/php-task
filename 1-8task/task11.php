<?php
function convertToUpperCase($array) {
    foreach ($array as $key => $value) {
        $array[$key] = strtoupper($value);
    }
    return $array;
}

$colors = array("red", "blue", "white", "yellow");
$colorsUpper = convertToUpperCase($colors);
print_r($colorsUpper);
?>            