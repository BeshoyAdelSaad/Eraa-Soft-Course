<?php
if (session_status() == PHP_SESSION_NONE) session_start();
include '../functions/sanitizer.php';

?>
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
    <div class="container my-2 p-2">
        <div class="row">
            <div class="w-50 m-auto shadow rounded border p-3 mb-4">
                <h2 class="text-center shadow-sm rounded  p-2 mb-2">Create Account</h2>
                <form action="../functions/handel_form.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                        <div class="text-danger"><?php errors('name'); ?></div>

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                        <div class="text-danger"><?php errors('email'); ?></div>

                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone">
                        <div class="text-danger"><?php errors('phone'); ?></div>

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
                        <div class="text-danger"><?php errors('password'); ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation:</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
                    </div>
                    <div class="mb-3">
                        <div>
                            <input type="submit" class="w-100 p-2 my-3 btn btn-primary" value="Register">
                            <a href="login.php" class="">Already have an account? Sign in</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>