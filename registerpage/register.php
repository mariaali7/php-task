<?php
// Include database connection code here

// Retrieve form data
$firstName = $_POST['first_name'];
$middleName = $_POST['middle_name'];
$lastName = $_POST['last_name'];
$familyName = $_POST['family_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$dob = $_POST['dob'];

// Validate and process form data
// Implement validation and age check for DOB here

// Insert data into the database
$insertQuery = "INSERT INTO logininfo (first_name, middle_name, last_name, family_name, email, mobile, password, dob) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($insertQuery);
$stmt->execute([$firstName, $middleName, $lastName, $familyName, $email, $mobile, $password, $dob]);

// Redirect to login page
header('Location: login.php');
?>