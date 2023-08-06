<?php
function isPrime($number) {
    // Check if the number is less than 2
    if ($number < 2) {
        return false;
    }

    // Check for divisibility from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$inputNumber = 3;

if (isPrime($inputNumber)) {
    echo $inputNumber . " is a prime number";
} else {
    echo $inputNumber . " is not a prime number";
}
?>