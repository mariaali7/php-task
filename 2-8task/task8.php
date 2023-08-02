<?php
// تحديد عدد الوحدات الكهربائية المستخدمة
$currentReading = 400;
$previousReading = 200;
$unitsUsed = $currentReading - $previousReading;

// حساب فاتورة الكهرباء الشهرية
$billAmount = 0;
if ($unitsUsed <= 50) {
    $billAmount = $unitsUsed * 2.5;
} elseif ($unitsUsed <= 150) {
    $billAmount = (50 * 2.5) + (($unitsUsed - 50) * 5);
} elseif ($unitsUsed <= 250) {
    $billAmount = (50 * 2.5) + (100 * 5) + (($unitsUsed - 150) * 6.2);
} else {
    $billAmount = (50 * 2.5) + (100 * 5) + (100 * 6.2) + (($unitsUsed - 250) * 7.5);
}

// عرض فاتورة الكهرباء الشهرية
echo "Total units used: {$unitsUsed}\n";
echo "Bill amount: {$billAmount} JOD";
?>
