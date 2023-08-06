<?php
function swapVariables(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;

echo "Before swapping: x = $x, y = $y<br>";

swapVariables($x, $y);

echo "After swapping: x = $x, y = $y";
?>