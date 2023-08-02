<?php
// Logical AND operator (&&)
$age = 25;
$isStudent = true;

if ($age >= 18 && $isStudent) {
    echo "You are eligible for a student discount.";
} else {
    echo "You are not eligible for a student discount.";
}

echo "<br>";

// Logical OR operator ()
$hasCoupon = false;
$hasPromoCode = true;

if ($hasCoupon or $hasPromoCode) {
    echo "You can apply a discount to your purchase.";
} else {
    echo "No discount available.";
}

echo "<br>";

// Logical NOT operator (!)
$isPremiumUser = false;

if (!$isPremiumUser) {
    echo "You need to be a premium user to access this feature.";
} else {
    echo "Welcome, premium user!";
}


// Logical XOR operator
$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "<br> Hello world!";
}


?>
