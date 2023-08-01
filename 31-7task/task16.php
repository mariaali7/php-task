<?php
// The original string
$string = '\"\\1+2/3*2:2-3/4*3';

// Remove special characters using preg_replace
$string = preg_replace('/[^0-9]/', ' ', $string);

// Remove extra spaces
$string = trim(preg_replace('/\s+/', ' ', $string));

// Output the modified string
echo $string;
?>