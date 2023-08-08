<?php
class FactorialCalculator {
    public function calculateFactorial($number) {
        if ($number === 0 || $number === 1) {
            return 1;
        } else {
            return $number * $this->calculateFactorial($number - 1);
        }
    }
}

// Create an instance of FactorialCalculator
$calculator = new FactorialCalculator();

// Calculate the factorial of a number
$number = 5;
$factorial = $calculator->calculateFactorial($number);

echo "The factorial of $number is: $factorial";
?>