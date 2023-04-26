<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .register-form {
            min-width: 300px;
            max-width: 500px;
            margin: auto;
        }
    </style>
    <title>Register</title>
</head>
<body>
<div class="container">
    <div class="row vh-100 align-items-center">
        <div class="col">
            <h1 class="text-center mb-4">Registrace</h1>
            <form class="register-form" action="register_process.php" method="post" novalidate>
                <div class="row mb-3">
                    <div class="col">
                        <label for="first_name" class="form-label">Jméno *</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                        <div class="invalid-feedback">Zadejte prosím jméno.</div>
                    </div>
                    <div class="col">
                        <label for="last_name" class="form-label">Příjmení *</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                        <div class="invalid-feedback">Zadejte prosím příjmení.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username *</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <div class="invalid-feedback">Zadejte prosím uživatelské jméno.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Heslo *</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">Zadejte prosím heslo.</div>
                </div>
                <div class="mb-3">
                    <label for="password_confirm" class="form-label">Kontrola hesla *</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
                    <div class="invalid-feedback">Zadejte prosím heslo znovu.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Zadejte prosím platnou emailovou adresu.</div>
                </div>
                <div class="mb-3">
                    <label for="security_question" class="form-label">Kontrolní otázka *</label>
                    <input type="text" class="form-control" id="security_question" name="security_question" required>
                    <div class="invalid-feedback">Zadejte prosím kontrolní otázku.</div>
                </div>
                <div class="mb-3">
                    <label for="security_answer" class="form-label">Odpověď na kontrolní otázku *</label>
                    <input type="text" class="form-control" id="security_answer" name="security_answer" required>
                    <div class="invalid-feedback">Zadejte prosím odpověď na kontrolní otázku.</div>
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Poznámka</label>
                    <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrovat</button>
            </form>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script>
    (function () {
        'use strict'

        let forms = document.querySelectorAll('.register-form');

        Array.from(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
</body>
</html>