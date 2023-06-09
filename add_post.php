<?php
    var_dump($_POST);
    session_start();
    require_once("config.php");
    $sql = "INSERT INTO posts (title, author, date, content) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date("Y-m-d H:i:s");
    if($_SESSION && $_SESSION['loggedin']){
        $author = "".$_SESSION['accountdetails']['username'];
    }else{
        $author = "Neregistrovaný uživatel";
    }

    $stmt->bind_param("ssss", $title, $author, $date, $content);
    $stmt->execute();
    header("Location: index.php");
?>