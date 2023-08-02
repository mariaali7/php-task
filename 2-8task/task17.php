<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $num = ($i == $j) ? ($i + 1) : 0;
        echo $num . ' ';
    }
    echo "\n";
}
?>