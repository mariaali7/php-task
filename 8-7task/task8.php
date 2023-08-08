<?php
// Set the cookie
$cookieName = "myCookie";
$cookieValue = "Hello, Cookie!";
$expiryTime = time() + (86400 * 30); // Cookie expires in 30 days
$cookiePath = "/";
$cookieDomain = "";
$secure = false; // Set to true if using HTTPS
$httponly = true;

setcookie($cookieName, $cookieValue, $expiryTime, $cookiePath, $cookieDomain, $secure, $httponly);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cookie Example</title>
</head>
<body>
  <h1>Cookie Example</h1>
  <p>Cookie has been set.</p>
</body>
</html>