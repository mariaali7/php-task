<?php
// Include database connection code here

session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];

// Display user information
echo "Welcome, " . $user['first_name'] . " " . $user['last_name'] . "<br>";
echo "Email: " . $user['email'] . "<br>";
echo "Mobile: " . $user['mobile'];
?>