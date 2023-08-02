<?php
$rows = 6; // عدد الصفوف
$cols = 6; // عدد الأعمدة

echo '<table cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        echo '<td>' . $i * $j . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>