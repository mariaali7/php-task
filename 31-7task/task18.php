<?php
// السلسلة الأصلية
$string = '2,543.12';

// إزالة الفواصل باستخدام "str_replace"
$new_string = str_replace(',', '', $string);

// عرض السلسلة الجديدة
echo $new_string;
?>