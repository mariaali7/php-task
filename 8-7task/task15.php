<?php
$dateString = '12-08-2004';

// Convert to Date format (Y-m-d)
$date = DateTime::createFromFormat('d-m-Y', $dateString);
$dateFormatted = $date->format('Y-m-d');

// Convert to DateTime format (Y-m-d H:i:s)
$datetime = DateTime::createFromFormat('d-m-Y', $dateString);
$datetimeFormatted = $datetime->format('Y-m-d H:i:s');

echo "Date Format: $dateFormatted" . PHP_EOL;
echo "DateTime Format: $datetimeFormatted" . PHP_EOL;
?>