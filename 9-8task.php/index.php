<?php
require("connect.php");

$query = "SELECT * FROM Employees";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
</head>
<body>
    <h1>View Employees</h1>
    <a href="create.php">Create New Employee</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Salary'] . "</td>";
                echo "<td>
                        <a href='read.php?id=" . $row['id'] . "'>View</a> |
                        <a href='update.php?id=" . $row['id'] . "'>Update</a> |
                        <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
