<?php
// السلسلة الأصلية
$string = 'The quick brown fox jumps over the lazy dog';

// تحويل السلسلة النصية إلى مصفوفة من الكلمات باستخدام "explode"
$words = explode(' ', $string);

// اختيار أول خمس كلمات باستخدام "array_slice"
$first_five_words = array_slice($words, 0, 5);

// تحويل الخمس كلمات إلى سلسلة نصية باستخدام "implode"
$new_string = implode(' ', $first_five_words);

// عرض السلسلة الجديدة
echo $new_string;
?>