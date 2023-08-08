<?php
$result = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operator = $_POST["operator"];

  switch ($operator) {
    case '+':
      $result = $num1 + $num2;
      break;
    case '-':
      $result = $num1 - $num2;
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    case '/':
      if ($num2 != 0) {
        $result = $num1 / $num2;
      } else {
        $result = "Cannot divide by zero";
      }
      break;
    default:
      $result = "Invalid operator";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
</head>
<body>
  <form method="post">
    <label for="num1">Number 1:</label>
    <input type="number" id="num1" name="num1" required><br><br>
    <label for="operator">Operator:</label>
    <select id="operator" name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select><br><br>
    <label for="num2">Number 2:</label>
    <input type="number" id="num2" name="num2" required><br><br>
    <input type="submit" value="Calculate">
  </form>

  <?php if ($result !== ''): ?>
    <h3>Result: <?php echo $result; ?></h3>
  <?php endif; ?>
</body>
</html>