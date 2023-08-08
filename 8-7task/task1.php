<!DOCTYPE html>
  <html>
<head>
  <title>Form Example</title>
</head>
<body>
  <form action="action.php" method="get">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Submit">
  </form>
  
  <form action="action.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Submit">
  </form>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "<h2>Data sent via GET method:</h2>";
    echo "<p>Email: " . $_GET["email"] . "</p>";
    echo "<p>Password: " . $_GET["password"] . "</p>";
  } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Data sent via POST method:</h2>";
    echo "<p>Email: " . $_POST["email"] . "</p>";
    echo "<p>Password: " . $_POST["password"] . "</p>";
  } else {
    echo "<h2>No data received.</h2>";
  }
  ?>
</body>
</html>