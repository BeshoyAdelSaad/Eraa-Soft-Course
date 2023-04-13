<?php
if (session_status() == PHP_SESSION_NONE) session_start();
include '../functions/sanitizer.php';
require_once '../functions/redirect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question5</title>
    <link rel="stylesheet" href="../../../../mainFiles/css/all.min.css">
    <link rel="stylesheet" href="../../../../mainFiles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../mainFiles/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../../../mainFiles/css/mycss.css">
</head>

<body>
    <div class="container my-3 p-3">
        <div class="row">
            <div class="w-50 m-auto shadow rounded border p-3 mb-4">
                <h2 class="text-center shadow-sm rounded  p-2 mb-2">Login</h2>
                <form action="../functions/login_form.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email/Phone :</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email Or Phone">
                        <div class="text-danger"><?php errors('email'); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
                        <div class="text-danger"><?php errors('password'); ?></div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="w-100 p-2 mb-3 m-auto btn btn-primary" value="Login">

                        <a href="register.php" class="w-100 text-right">Create account</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>