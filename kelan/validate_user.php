<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Escape user input to prevent SQL Injection
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

// Prepare SQL query to find user with entered credentials
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);
  // Store user information in session variables
  $_SESSION['userid'] = $user['userid'];
  $_SESSION['username'] = $user['username'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['gender'] = $user['gender'];
  // User found, handle successful login (e.g., redirect to dashboard)
  echo "Login successful!";
  header("Location: home2.html");  // Redirect on successful login
} else {
  // User not found, display error message
  echo "<script>alert('Invalid username or password!'); window.location.href = 'formsignin.php';</script>";
}

mysqli_close($conn);
?>
