<?php
// Include database connection code here
$dsn = "mysql:host=localhost;dbname=logininfo;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user data from the database based on the provided email
$selectQuery = "SELECT * FROM logininfo WHERE email = ?";
$stmt = $pdo->prepare($selectQuery);
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if the user exists and the provided password matches
if ($user && password_verify($password, $user['password'])) {
    // Update last login timestamp
    $updateQuery = "UPDATE users SET last_login_at = CURRENT_TIMESTAMP WHERE id = ?";
    $updateStmt = $pdo->prepare($updateQuery);
    $updateStmt->execute([$user['id']]);
    
    // Start a session and store user data
    session_start();
    $_SESSION['user'] = $user;

    // Redirect to welcome page
    header('Location: welcome.php');
} else {
    echo "Invalid credentials";
}
?>