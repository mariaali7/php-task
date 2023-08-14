<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $db_password = "";
  $dbname = "mysql";

  $conn = new mysqli($servername, $username, $db_password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if the user exists in the database
  $sql = "SELECT * FROM logininfo WHERE email = '$email' LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if ($row['password'] === $password) {
      // Password matches, update last login time and redirect to the welcome page
      $userId = $row['id'];
      $sql = "UPDATE logininfo SET last_login_at = CURRENT_TIMESTAMP WHERE id = $userId";
      if ($conn->query($sql) === TRUE) {
        // Redirect to the welcome page
        header("Location: index.php");
        exit();
      } else {
        echo "Error updating last login time: " . $conn->error;
      }
    } else {
      echo "Invalid password";
    }
  } else {
    echo "User not found";
  }

  $conn->close();
}
?>