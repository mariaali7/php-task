<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $url = $_POST["url"];
  header("Location: " . $url); // Redirect to the specified URL
  exit(); // Stop further execution
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search Engine</title>
</head>
<body>
  <form method="post">
    <label for="url">Enter URL:</label>
    <input type="text" id="url" name="url" placeholder="https://example.com" required>
    <input type="submit" value="GO">
  </form>
</body>
</html>