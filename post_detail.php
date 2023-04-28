<?php

require_once("config.php");
$sql = "SELECT * FROM posts WHERE id = ".$_GET['id']."";

$result = $conn->query($sql);
$rows = $result->fetch_assoc();

$sqlo = "SELECT * FROM comments WHERE post_id = ".$_GET['id']."";

$resulto = $conn->query($sqlo);
$rowso = array();
while ($row = $resulto->fetch_assoc()) {
    $rowso[] = $row;
}

$post = [
    'title' => $rows['title'],
    'author' => $rows['author'],
    'date' => $rows['date'],
    'content' => $rows['content'],
];

$comments = [];

session_start();

if($rowso) {
    foreach ($rowso as $key => $value) {
        $newComment = [
            'id' => $value['id'],
            'author' => $value['author'],
            'content' => $value['content'],
            'date' => $value['date']
        ];
        array_push($comments, $newComment);
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
    <title>Post detail</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
    <h1><?= htmlspecialchars($post['title']); ?></h1>
    <h6 class="text-muted">Author: <?= htmlspecialchars($post['author']); ?></h6>
    <p class="text-muted">Date: <?= htmlspecialchars($post['date']); ?></p>
    <p><?= htmlspecialchars($post['content']); ?></p>

    <br/>
    <hr>
    <br/>

    <h3>Komentáře</h3>
    <form action="add_comment.php" method="post">
        <div class="mb-3">
            <label for="content" class="form-label">Přidat komentář</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <input type="hidden" id="postId" name="postId" value="<?php echo $_GET['id']; ?>" />
        <button type="submit" class="btn btn-primary">Odeslat</button>
    </form>

    <br/>
    <hr>
    <br/>
    <?php foreach ($comments as $comment): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Author: <?= htmlspecialchars($comment['author']); ?></h6>
                <p class="card-text"><?= htmlspecialchars($comment['content']); ?></p>
            </div>
            <div class="card-footer">
                <small><?= htmlspecialchars($comment['date']); ?> <?php     if(
                        ($_SESSION && $_SESSION['loggedin'] && $_SESSION['accountdetails']['group'] == 'admin')
                        ||
                        ($_SESSION && $_SESSION["loggedin"] && $_SESSION["accountdetails"]["username"] == $comment["author"]))
                    {?><a href="remove_comment.php?id=<?php echo $comment['id']; ?>&author=<?php echo $comment["author"]?>" style="color: red;">REMOVE COMMENT</a><?php }?></small>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>