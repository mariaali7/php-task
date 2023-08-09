<?php
require("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    $query = "INSERT INTO Employees (Name, Address, Salary) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $address, $salary]);

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
</head>
<body>
    <h1>Create Employee</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" required><br>

        <input type="submit" value="Create">
    </form>
</body>
</html>