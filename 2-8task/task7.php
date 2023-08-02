<?php
// تحديد الأرقام الثلاثة
$numbers = array(1, 5, 9);

// تحديد العدد الأكبر
$largestNumber = $numbers[0];
foreach ($numbers as $number) {
    if ($number > $largestNumber) {
        $largestNumber = $number;
    }
}

// عرض العدد الأكبر
echo $largestNumber;
?>