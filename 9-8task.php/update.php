<?php
require("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    $query = "UPDATE Employees SET Name = ?, Address = ?, Salary = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $address, $salary, $id]);

    header("Location: index.php");
    exit();
} elseif (isset($_GET['id'])) {
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
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    <?php if ($employee) { ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $employee['Name']; ?>" required><br>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $employee['Address']; ?>" required><br>

            <label for="salary">Salary:</label>
            <input type="number" name="salary" id="salary" value="<?php echo $employee['Salary']; ?>" required><br>

            <input type="submit" value="Update">
        </form>
    <?php } else { ?>
        <p>No employee found.</p>
    <?php } ?>

    <a href="index.php">Back to Employees</a>
</body>
</html>