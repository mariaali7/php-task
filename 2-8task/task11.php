php
Copy
<?php
// تحديد العدد
$num = -60;

// التحقق ما إذا كان العدد إيجابيًا، سلبيًا أو صفرًا
if ($num > 0) {
    echo "Positive";
} elseif ($num < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
?>