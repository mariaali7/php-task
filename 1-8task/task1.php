<?php
//  الأصلي
$original_text = 'The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon';

$colors = array('red', 'green', 'white');

$new_text = str_replace(array('red', 'green', 'white'), $colors, $original_text);

echo $new_text;
?>