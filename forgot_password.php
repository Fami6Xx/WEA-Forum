<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot password</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .forgot-password-form {
            min-width: 300px;
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row vh-100 align-items-center">
        <div class="col">
            <h1 class="text-center mb-4">Zapomenuté heslo</h1>
            <form class="forgot-password-form" action="reset_password.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="security_question" class="form-label">Kontrolní otázka</label>
                    <input type="text" class="form-control" id="security_question" name="security_question" required readonly>
                </div>
                <div class="mb-3">
                    <label for="security_answer" class="form-label">Odpověď na kontrolní otázku</label>
                    <input type="text" class="form-control" id="security_answer" name="security_answer" required>
                </div>
                <button type="submit" class="btn btn-primary">Odeslat</button>
            </form>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>
