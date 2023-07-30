<?php
$url = "https://www.w3schools.com/php/default.as";

// Get the protocol (http or https)
$protocol = parse_url($url, PHP_URL_SCHEME);

// Get the domain name (w3schools.com)
$domain = parse_url($url, PHP_URL_HOST);

// Get the path (/php/default.as)
$path = parse_url($url, PHP_URL_PATH);

// Output the results
echo "Protocol: " . $protocol . "<br>";
echo "Domain: " . $domain . "<br>";
echo "Path: " . $path . "<br>";
?>