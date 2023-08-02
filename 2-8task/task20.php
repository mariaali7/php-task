<?php
$text = "Orange Coding Academy";
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == 'c') {
        $count++;
    }
}

echo $count;
?>