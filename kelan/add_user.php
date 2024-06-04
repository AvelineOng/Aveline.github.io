<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$userid = $_POST ["userid"];
$usn = $_POST ["username"];
$email = $_POST ["email"];
$passcode = $_POST ["password"];
$gender = $_POST ["gender"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (userid, username, email, password, gender)
VALUES ('$userid', '$usn', '$email', '$passcode', '$gender')";

if (mysqli_query($conn, $sql)) {
  echo "1 record created successfully";
  header("Location: formsignin.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>