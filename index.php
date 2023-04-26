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

<div class="container my-4">
    <h2 class="text-center mb-4">Category 1</h2>
    <div class="row justify-content-center">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card">
                    <div class="card-header"><h5 class="card-title">Post Title <?= $i; ?></h5></div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Author: Your mother</h6>
                        <p class="card-subtitle mb-2 text-muted">Date: 4.20.0000</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consectetur delectus, dolorem harum iure maxime similique voluptatibus? Ad aliquid dolorem eius fugiat hic maiores maxime molestiae, natus, necessitatibus nesciunt nostrum, odio officiis omnis praesentium quisquam sunt veniam veritatis voluptas? Ea?</p>
                        <a href="post_detail.php" class="card-link">Read More</a>
                    </div>
                    <div class="card-footer"><small>Last updated 3 mins ago</small></div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <br/>
    <hr/>
    <br/>

    <h2 class="text-center mb-4">Category 2</h2>
    <div class="row justify-content-center">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card">
                    <div class="card-header"><h5 class="card-title">Post Title <?= $i; ?></h5></div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Author: Your mother</h6>
                        <p class="card-subtitle mb-2 text-muted">Date: 4.20.0000</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consectetur delectus, dolorem harum iure maxime similique voluptatibus? Ad aliquid dolorem eius fugiat hic maiores maxime molestiae, natus, necessitatibus nesciunt nostrum, odio officiis omnis praesentium quisquam sunt veniam veritatis voluptas? Ea?</p>
                        <a href="post_detail.php" class="card-link">Read More</a>
                    </div>
                    <div class="card-footer"><small>Last updated 3 mins ago</small></div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <br/>
    <hr/>
    <br/>

    <h2 class="text-center mb-4">Category 3</h2>
    <div class="row justify-content-center">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card">
                    <div class="card-header"><h5 class="card-title">Post Title <?= $i; ?></h5></div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Author: Your mother</h6>
                        <p class="card-subtitle mb-2 text-muted">Date: 4.20.0000</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consectetur delectus, dolorem harum iure maxime similique voluptatibus? Ad aliquid dolorem eius fugiat hic maiores maxime molestiae, natus, necessitatibus nesciunt nostrum, odio officiis omnis praesentium quisquam sunt veniam veritatis voluptas? Ea?</p>
                        <a href="post_detail.php" class="card-link">Read More</a>
                    </div>
                    <div class="card-footer"><small>Last updated 3 mins ago</small></div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
