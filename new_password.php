<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once("config.php");
        $sql = "SELECT * FROM users WHERE email = '".$_POST['email']."'";
        
        $result = $conn->query($sql);
        $rows = $result->fetch_assoc();
    
        if($rows) {
            if($rows['security_question'] == $_POST['security_question']){
                if($rows['security_answer'] == $_POST['security_answer']){
                    if($_POST['password']){

                        $sql = "UPDATE users SET password = '".password_hash($_POST['password'], PASSWORD_DEFAULT)."' WHERE email = '".$_POST['email']."'";
                        $result = $conn->query($sql);
                        header("Location: login.php");
                    } else {
                        header("Location: forgot_password.php");
                    }
                } else {
                    header("Location: forgot_password.php");
                }
            } else {
                header("Location: forgot_password.php");
            }
        }
    }
?>
