<?php
function reverseString($str) {
    $reversed = '';
    $length = strlen($str);

    // Iterate through the string from the last character to the first
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

$inputString = "remove";
$reversedString = reverseString($inputString);

echo $reversedString;
?>