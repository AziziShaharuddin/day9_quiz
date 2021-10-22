

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h3>Please login</h3>
    <form action="attendance_login.php" method="post">
        <label for="">Username/email: </label>
        <input type="text" name="name"><br>
        <label for="">Password: </label>
        <input type="password" name="password"><br>
        <button>I'm here!</button>
    </form>
    <?php
        // $name = $_POST["name"];
        // $password = $_POST["password"];
        // if($name != "" && $password != ""){
        //     echo "You have clocked in!";
        // } else {
        //     echo '<script>alert("Please key in your details")</script>';
        // }
    ?>
</body>
</html>