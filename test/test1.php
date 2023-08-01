<?php

//array_chunk()
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$chunks = array_chunk($numbers, 3);

echo "<pre>";
var_dump($chunks);
echo "</pre>";


//array_column()
$students = array(
    array('name' => 'John', 'grade' => 85),
    array('name' => 'Lisa', 'grade' => 92),
    array('name' => 'Mark', 'grade' => 78),
    array('name' => 'Susan', 'grade' => 88),
);

print_r(array_column($students, 'grade'));


//multidiminsional array

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo $matrix[1][2];

echo "<pre>";
print_r($matrix[1]);
echo "<\pre>"


?>