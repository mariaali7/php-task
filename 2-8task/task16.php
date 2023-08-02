<?php
for ($i = 0; $i < 5; $i++) {
    $num = 1;
    $count = 5 - $i;
    for ($j = 0; $j < $count; $j++) {
        if ($j >= 5 - $count) {
            $num++;
        }
        echo str_repeat($num - ($j % $num) . ' ', $count);
    }
    echo "\n";
}
?>