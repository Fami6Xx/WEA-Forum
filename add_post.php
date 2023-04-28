<?php
    var_dump($_POST);
    session_start();
    if($_SESSION && $_SESSION['loggedin']){
        require_once("config.php");
        $sql = "INSERT INTO posts (title, author, date, content) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date("Y-m-d H:i:s");
        $author = "".$_SESSION['accountdetails']['fistname']." ".$_SESSION['accountdetails']['lastname']."";
        $stmt->bind_param("ssss", $title, $author, $date, $content);
        $stmt->execute();
        header("Location: index.php");
    }
?>