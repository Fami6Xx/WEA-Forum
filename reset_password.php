<?php
    require_once("config.php");
    $sql = "SELECT * FROM users WHERE email = '".$_POST['email']."'";
    
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    if($rows) {
        if($rows['security_question'] == $_POST['security_question']){
            if($rows['security_answer'] == $_POST['security_answer']){
                $random_string = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);
                $sql = "UPDATE users SET password = '".password_hash($random_string, PASSWORD_DEFAULT)."' WHERE email = '".$_POST['email']."'";
                $result = $conn->query($sql);
                echo $random_string;
            }
        }
    }
?>