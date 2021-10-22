<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "companyinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$password = $_POST["password"];
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO attendance_log (username, password)
VALUES ('$name', '$hashed_password');";

if($name != "" && $password != ""){
  echo "You have clocked in!";
} else {
  echo '<script>alert("Please key in your details")</script>';
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}