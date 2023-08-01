<?php
$string1 = 'dragonball';
$string2 = 'dragonboll';

$length = strlen($string1);

for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo 'First difference between two strings at position ' . $i . ': "' . $string1[$i] . '" vs "' . $string2[$i] . '"';
        break;
    }
}
?>