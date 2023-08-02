<?php
$num = 5; // عدد الذي يجب حساب مضروبه التسلسلي
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo $factorial;
?>