<?php
$cities = array(
    "Italy" => "Rome" ,
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

// Sort the array based on capitals in ascending order
asort($cities);

// Iterate through the sorted array and display the output
foreach ($cities as $country => $capital) {


    echo "The capital of $country is $capital\n";
}
?>