
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Attendance</title>
</head>
<body>
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

$sql = "SELECT clockin_id, username, datetime FROM attendance_log;";
// $result = mysqli_query($conn, $sql);

//$result variable is to call the query function, and the input is the variable yang kita set
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo $results->num_rows;
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "No: " . $row["clockin_id"]."<br>"."Username: " . $row["username"]."<br>"."Clock in datetime: ".$row["datetime"]. "<br>";
  }
} else {
  echo "0 results";
}

?>
</body>
</html>