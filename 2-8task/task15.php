<?php
for ($i = 0; $i < 5; $i++) {
    $char = 'A';
    $count = 5 - $i;
    for ($j = 0; $j < $count; $j++) {
        if ($j >= 5 - $count) {
            $char++;
        }
        echo str_repeat($char . ' ', $count);
    }
    echo "\n";
}
?>