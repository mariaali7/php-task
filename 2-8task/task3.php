<?php
$firstInteger = 2;
$secondInteger = 2;

$sum = $firstInteger + $secondInteger;

if ($firstInteger == $secondInteger) {
    $result = $sum * 3;
    echo "({$firstInteger} + {$secondInteger}) * 3 = {$result}";
} else {
    echo "{$firstInteger} + {$secondInteger} = {$sum}";
}
?>