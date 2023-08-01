<?php
$string = 'The quick brown fox jumps over the lazy dog';

$remove = 'fox';

$string = str_replace($remove, '', $string);

echo $string;
?>
