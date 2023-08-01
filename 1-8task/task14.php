<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Initialize variables to store the shortest and longest lengths
$shortestLength = PHP_INT_MAX;
$longestLength = 0;

// Iterate through the array to find the shortest and longest lengths
foreach ($words as $word) {
    $length = strlen($word);
    if ($length < $shortestLength) {
        $shortestLength = $length;
    }
    if ($length > $longestLength) {
        $longestLength = $length;
    }
}

// Output the result
echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";
?>