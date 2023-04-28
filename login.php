<?php
    var_dump($_POST);
    if($_GET){
        require_once("config.php");
        $sql = "SELECT * FROM users WHERE username='".$_GET['username']."'";
        // Execute the query
        $result = $conn->query($sql);
        $result = $result->fetch_assoc();
        if($result) {
            var_dump(password_verify($result['password'], $_GET['password']));
            var_dump($result['password']);
            var_dump($_GET['password']);
            if(password_verify($result['password'], $_GET['password'])){
                echo "loggedin";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<div class="background">
</div>
<form>
    <h3>Login</h3>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" placeholder="Your username" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button type="submit">Log In</button>
        <div class="text-center mt-3">
            <a href="forgot_password.php">Zapomenuté heslo</a>
        </div>
    </form>

</form>
</body>
</html>