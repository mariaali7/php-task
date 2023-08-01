<?php

// Sample Input
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate the Average Temperature
$averageTemperature = array_sum($temperatures) / count($temperatures);

// Sort the temperatures in ascending order
sort($temperatures);

// Get the five lowest temperatures
$lowestTemperatures = array_slice($temperatures, 0, 5);

// Get the five highest temperatures
$highestTemperatures = array_slice($temperatures, -5);

// Display the results
echo "Average Temperature is: " . number_format($averageTemperature, 1) . "\n";
echo "List of five lowest temperatures: " . implode(", ", $lowestTemperatures) . "\n";
echo "List of five highest temperatures: " . implode(", ", $highestTemperatures) . "\n";

?>