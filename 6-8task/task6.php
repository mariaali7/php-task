<?php
function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $str = preg_replace('/[^a-zA-Z0-9]/', '', $str);
    $str = strtolower($str);

    // Reverse the string
    $reversed = strrev($str);

    // Check if the original string and the reversed string are the same
    if ($str === $reversed) {
        return true;
    } else {
        return false;
    }
}

$inputString = "Eva, can I see bees in a cave?";

if (isPalindrome($inputString)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}
?>