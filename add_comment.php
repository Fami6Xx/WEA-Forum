<?php
    session_start();
    require_once("config.php");
    $sql = "INSERT INTO comments (post_id, author, content, date) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $post_id = $_POST['postId'];
    $content = $_POST['content'];
    $date = date("Y-m-d H:i:s");
    $author = "Neregistrovaný uživatel";
    if($_SESSION) {
        $author = "".$_SESSION['accountdetails']['username'];
    }
    $stmt->bind_param("ssss", $post_id, $author, $content, $date);
    $stmt->execute();

    $sql_update = "UPDATE posts SET num_comments = num_comments + 1 WHERE id = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("s", $post_id);
    $stmt_update->execute();

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>