<?php
$url = "http://www.orange.com/index.php";

$file_name = basename(parse_url($url, PHP_URL_PATH));

echo $file_name;
?>