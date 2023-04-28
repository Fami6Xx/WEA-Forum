<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once("config.php");
        $sql = "SELECT * FROM users WHERE username='".$_POST['username']."'";
        // Execute the query
        $result = $conn->query($sql);
        $rows = $result->fetch_assoc();
        var_dump($rows);
        // var_dump($result);
        if($result) {
            session_start();
            if(password_verify($_POST['password'], $rows['password'])){
                $_SESSION['accountdetails'] = $rows;
                $_SESSION['loggedin'] = true;
                header("Location: index.php");
            } else {
                header("Location: login.php");
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h3>Login</h3>
    <label for="username">Username</label>
    <input type="text" placeholder="Your username" id="username" name="username">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password">

    <button type="submit">Log In</button>
    <div class="text-center mt-3">
        <a href="forgot_password.php">Zapomenuté heslo</a>
    </div>
</form>
</body>
</html>