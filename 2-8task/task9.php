<?php
// تحديد الأرقام ونوع العملية الحسابية
$num1 = 10;
$num2 = 5;
$operator = "+";

// تطبيق العملية الحسابية المناسبة
if ($operator == "+") {
    $result = $num1 + $num2;
} elseif ($operator == "-") {
    $result = $num1 - $num2;
} elseif ($operator == "*") {
    $result = $num1 * $num2;
} elseif ($operator == "/") {
    $result = $num1 / $num2;
} else {
    echo "Invalid operator";
    exit();
}

// عرض النتيجة
echo "Result: {$result}";
?>