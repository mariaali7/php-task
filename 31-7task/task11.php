<?php
// الحرف المدخل
$char = 'a';

$next_char_value = ord($char) + 1;

if ($char === 'z') {
    $next_char_value = ord('a');
}

$next_char = chr($next_char_value);

echo $next_char;
?>