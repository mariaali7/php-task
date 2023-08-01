<?php
function generateUniqueRandomNumbers($min, $max, $count) {
    $numbers = range($min, $max);
    $result = [];

    if ($max - $min + 1 < $count) {
        return false; // Range is not large enough to generate unique random numbers.
    }

    for ($i = 0; $i < $count; $i++) {
        $randomIndex = mt_rand(0, count($numbers) - 1);
        $result[] = $numbers[$randomIndex];
        array_splice($numbers, $randomIndex, 1);
    }

    return $result;
}

$min = 11;
$max = 20;
$count = 10;

$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);
if ($randomNumbers === false) {
    echo "Error: Range is not large enough to generate $count unique random numbers.";
} else {
    echo implode(' ', $randomNumbers);
}
?>