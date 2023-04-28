<?php
    var_dump($_POST);

    require_once("config.php");
    $sql = "INSERT INTO users (firstname, lastname, username, password, email, security_question, security_answer) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $name = $_POST['first_name'];
    $surname = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['username'], PASSWORD_DEFAULT);
    $security = $_POST['security_question'];
    $securityanswer = $_POST['security_answer'];
    $stmt->bind_param("sssssss", $name, $surname, $username, $password, $email, $security, $securityanswer);
    $stmt->execute();
?>