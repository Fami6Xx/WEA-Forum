<?php
    session_start();
    if(
        ($_SESSION && $_SESSION['loggedin'] && $_SESSION['accountdetails']['group'] == 'admin')
        ||
        ($_SESSION && $_SESSION["loggedin"] && $_SESSION["accountdetails"]["username"] == $_GET["author"]))
    {
        require_once("config.php");
        $sql = "DELETE FROM comments WHERE id = ".$_GET['id']."";
        $result = $conn->query($sql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>