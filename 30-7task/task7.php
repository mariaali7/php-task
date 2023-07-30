<?php
$string = "PHP Tutorial";

// Split the string into an array of words
$words = explode(" ", $string);

// Loop through each word and color the first character
foreach ($words as $word) {
    // Get the first character of the word
    $first_char = substr($word, 0, 1);
    
    // Get the rest of the word
    $rest_of_word = substr($word, 1);
    
    // Output the word with the first character colored
    echo "<span style='color: red;'>$first_char</span>$rest_of_word ";
}
?>