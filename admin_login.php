<?php
    include 'employee.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h3>Please login</h3>
    <form action="employee.php" method="post">
        <label for="">Username/email: </label>
        <input type="text" name="username"><br>
        <button>Login</button>
    </form>
    <?php
        $adminname = $_POST["username"];      
        if($adminname == ""){
            echo '<script>alert("Please key in your username")</script>';
        }
    ?>
</body>
</html>