<?php
session_start();

// Check if the visitor count exists in the session, if not, initialize it
if (!isset($_SESSION['visitor_count'])) {
  $_SESSION['visitor_count'] = 0;
}

// Check if the visitor has a cookie indicating a previous visit
if (!isset($_COOKIE['visited'])) {
  // Increment the visitor count and set a cookie to track the visit
  $_SESSION['visitor_count']++;
  setcookie('visited', 'true', time() + (86400 * 30)); // Cookie lasts for 30 days
}

// Display the visitor count
$visitorCount = $_SESSION['visitor_count'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Visitor Counter</title>
</head>
<body>
  <h1>Visitor Counter</h1>
  <p>Number of unique visitors: <?php echo $visitorCount; ?></p>
</body>
</html>

