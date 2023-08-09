<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO Employees (Name, Address, Salary) VALUES (?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $address, $salary]);

    header('Location: index.php');
}
?>