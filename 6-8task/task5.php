<?php
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;

    // Calculate the sum of the cubes of each digit
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, 3);
        $temp = (int)($temp / 10);
    }

    // Check if the sum is equal to the original number
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$inputNumber = 407;

if (isArmstrongNumber($inputNumber)) {
    echo $inputNumber . " is an Armstrong Number";
} else {
    echo $inputNumber . " is not an Armstrong Number";
}
?>