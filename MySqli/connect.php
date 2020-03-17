<?php
$mysqli = new mysqli("localhost","root","","todo_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else echo 'Connection is successful.'."<br>";

//fetch process
$sql = "SELECT first_name, last_name FROM users ORDER BY id";
$result = mysqli_query($mysqli, $sql);

// Associative array
$row = mysqli_fetch_assoc($result);
printf ("%s %s", $row["first_name"], $row["last_name"]);

// Free result set
mysqli_free_result($result);

mysqli_close($mysqli);
?>