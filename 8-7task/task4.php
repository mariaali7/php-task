<?php
session_start();

// Check if the task list exists in the session, if not, initialize it
if (!isset($_SESSION['tasks'])) {
  $_SESSION['tasks'] = [];
}

// Add task to the list
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $task = $_POST["task"];

  if (!empty($task)) {
    array_push($_SESSION['tasks'], $task);
  }
}

// Remove task from the list
if (isset($_GET['remove'])) {
  $index = $_GET['remove'];
  if (isset($_SESSION['tasks'][$index])) {
    unset($_SESSION['tasks'][$index]);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <style>
    .todo-container {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .todo-container h1 {
      text-align: center;
    }

    .todo-form {
      display: flex;
      margin-bottom: 10px;
    }

    .todo-form input[type="text"] {
      flex-grow: 1;
      padding: 5px;
    }

    .todo-form input[type="submit"] {
      padding: 5px 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .todo-list {
      list-style-type: none;
      padding: 0;
    }

    .todo-list li {
      display: flex;
      align-items: center;
      margin-bottom: 5px;
    }

    .todo-list li span {
      flex-grow: 1;
    }

    .todo-list li button {
      padding: 2px 5px;
      background-color: #f44336;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="todo-container">
    <h1>To-Do List</h1>

    <form class="todo-form" method="post">
      <input type="text" name="task" placeholder="Enter task..." required>
      <input type="submit" value="Add">
    </form>

    <ul class="todo-list">
      <?php foreach ($_SESSION['tasks'] as $index => $task) { ?>
        <li>
          <span><?php echo $task; ?></span>
          <a href="?remove=<?php echo $index; ?>"><button>Remove</button></a>
        </li>
      <?php } ?>
    </ul>
  </div>
</body>
</html>