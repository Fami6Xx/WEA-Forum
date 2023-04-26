<?php
$post = [
    'title' => 'First Post',
    'author' => 'John Doe',
    'date' => '2023-04-27 12:30:00',
    'content' => 'This is the content of the first post.',
];

$comments = [
    [
        'author' => 'Jane Doe',
        'content' => 'This is a comment.',
        'date' => '2023-04-27 13:15:00',
    ],
    [
        'author' => 'Neregistrovaný uživatel',
        'content' => 'This is another comment.',
        'date' => '2023-04-27 14:30:00',
    ]
];
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
                <small><?= htmlspecialchars($comment['date']); ?></small>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>