<?php
require("connect.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $query = "SELECT * FROM Employees WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <h1>Employee Details</h1>
    
    <?php if ($employee) { ?>
        <p><strong>ID:</strong> <?php echo $employee['id']; ?></p>
        <p><strong>Name:</strong> <?php echo $employee['Name']; ?></p>
        <p><strong>Address:</strong> <?php echo $employee['Address']; ?></p>
        <p><strong>Salary:</strong> <?php echo $employee['Salary']; ?></p>
    <?php } else { ?>
        <p>No employee found.</p>
    <?php } ?>
    
    <a href="index.php">Back to Employees</a>
</body>
</html>