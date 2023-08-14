
<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  // User is logged in
  $userName = $_SESSION['user_name'];
  $userEmail = $_SESSION['user_email'];

  // Display the welcome message and user's email
  echo "<h1>Welcome, $userName!</h1>";
  echo "<p>Your email: $userEmail</p>";
}?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome to the Login System</title>
</head>
<body>
  <h1>Welcome to the Login System</h1>
  <p>Please select an option:</p>
  <ul>
    <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">Sign Up</a></li>
  </ul>
</body>
</html>