<?php
if (session_status() == PHP_SESSION_NONE) session_start();
include '../../Logic/Functions/redirect.php';
if (isset($_SESSION['login'])) redirect('index');
include "../../Layouts/init.php";
include "../../Logic/Functions/handle_error.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>


<div class="shadow rounded border main-container">
    <h2 class="text-center shadow-sm rounded  p-2 mb-2">Login</h2>
    <form action="<?= $root ?>Logic/Auth/login_form.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email/Phone :</label>
            <input type="text" class="form-control" name="email" value="<?php old('email'); ?>" placeholder="Enter Your Email Or Phone">
            <div class="msg-error"><?php errors('email'); ?></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
            <div class="msg-error"><?php errors('password'); ?></div>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn-primary" value="Login">

            <a href="register.php" class="a-btn-right">Create account</a>
        </div>
    </form>
</div>


<?php
include '../../Layouts/footer.php';
?>