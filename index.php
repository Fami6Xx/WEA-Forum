<?php
// Sample array of posts

require_once("config.php");
$sql = "SELECT * FROM posts";

$result = $conn->query($sql);
$rows = array();
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

$posts = [];
foreach ($rows as $key => $value) {
    $newPost = [
        'id' => $value['id'],
        'title' => $value['title'],
        'author' => $value['author'],
        'date' => $value['date'],
        'num_comments' => $value['num_comments'],
        'content' => $value['content']
    ];
    array_push($posts, $newPost);
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
    <title>Forum</title>
</head>
<body>
<?php include "navbar.php"; ?>
<?php
session_start();
if($_SESSION && $_SESSION['loggedin']){
?>
    <div class="container my-4 w-25">
    <form action="add_post.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Nadpis</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Text</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Přidat příspěvek</button>
    </form>
</div>
<?php
}
?>

<br/>
<hr>
<br/>

<div class="row justify-content-center m-5">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><?= htmlspecialchars($post['title']); ?> 
                    <?php if($_SESSION && $_SESSION['loggedin'] && $_SESSION['accountdetails']['group'] == 'admin') {?>
                        <a href="remove_post.php?id=<?php echo $post['id']; ?>" style="color: red;">REMOVE POST</a>
                        <?php }?>
                    </h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Author: <?= htmlspecialchars($post['author']); ?></h6>
                    <p class="card-subtitle mb-2 text-muted">Date: <?= htmlspecialchars($post['date']); ?></p>
                    <p class="card-text"><?= htmlspecialchars($post['content']); ?></p>
                    <a href="post_detail.php?id=<?php echo $post['id'];?>" class="card-link">Read More</a>
                </div>
                <div class="card-footer">
                    <small><?= $post['num_comments']; ?> comments</small>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<script src="js/bootstrap.js"></script>
</body>
</html>
