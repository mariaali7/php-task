<?php
function convertToLowercase($array) {
    return array_map('strtolower', $array);
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$lowercaseColors = convertToLowercase($colors);
print_r($lowercaseColors);
?>                             