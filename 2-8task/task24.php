<?php
$n = 5; // عدد الصفوف في النمط
$letters = range('A', 'Z'); // مصفوفة تحتوي على الأبجدية من A إلى Z

// إنشاء الأجزاء العلوية للنمط
for ($row = 1; $row <= $n; $row++) {
    // إنشاء الفراغات اللازمة قبل الحرف
    for ($space = 1; $space <= $n - $row; $space++) {
        echo " ";
    }

    // إنشاء الأحرف من A إلى الحرف المناسب
    for ($col = 0; $col < $row; $col++) {
        echo $letters[$col] . " ";
    }

    echo "<br>";
}

// إنشاء الأجزاء السفلية للنمط
for ($row = $n - 1; $row >= 1; $row--) {
    // إنشاء الفراغات اللازمة قبل الحرف
    for ($space = 1; $space <= $n - $row; $space++) {
        echo " ";
    }

    // إنشاء الأحرف من A إلى الحرف المناسب
    for ($col = 0; $col < $row; $col++) {
        echo $letters[$col] . " ";
    }

    echo "<br>";
}
?>