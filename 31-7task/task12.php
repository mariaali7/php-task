<?php
// The original string
$string = 'The brown fox';

// The string to be inserted
$insert_string = 'quick';

// The position to insert the string
$insert_position = 3;

// Insert the string using substr_replace function
$string = substr_replace($string, $insert_string.' ', $insert_position, 0);

// Output the modified string
echo $string;
?>