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
$pw = $_POST["password"];

$sql = "INSERT INTO attendance_log (username, password)
VALUES ('$name', '$pw')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }