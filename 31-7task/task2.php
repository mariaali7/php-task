<?php
$num_string = "085119"; 
$hour = substr($num_string, 0, 2); 
$minute = substr($num_string, 2, 2); 
$second = substr($num_string, 4, 2); 

$time = $hour . ":" . $minute . ":" . $second; 
echo $time;
?>