<?php
session_start();

// Check if the counter exists in the session, if not, initialize it
if (!isset($_SESSION['counter'])) {
  $_SESSION['counter'] = 0;
}

// Increment the counter on each page refresh
$_SESSION['counter']++;

// Display the counter value
$counter = $_SESSION['counter'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Website Counter</title>
</head>
<body>
  <h1>Website Counter</h1>
  <p>Number of page refreshes: <?php echo $counter; ?></p>
</body>
</html>