<?php
// تحديد درجات الطالب في كل مادة
$grades = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

// حساب متوسط الدرجات
$count = count($grades);
$sum = array_sum($grades);
$average = $sum / $count;

// تحديد الصف الذي يتوافق مع الدرجة النهائية
if ($average >= 90) {
    echo "A";
} elseif ($average >= 80) {
    echo "B";
} elseif ($average >= 70) {
    echo "C";
} elseif ($average >= 60) {
    echo "D";
} else {
    echo "F";
}
?>