<?php
if (session_status() == PHP_SESSION_NONE) session_start();
include '../../Logic/Functions/redirect.php';
if (isset($_SESSION['login'])) redirect('index');
include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
include "../../Logic/Functions/handle_error.php";
?>


<div class="shadow rounded border main-container">
    <h2 class="text-center shadow-sm rounded  p-2 mb-2">Create Account</h2>
    <form action="<?= $root ?>/Logic/Auth/register_form.php" method="post">
        <div class="w-50 left">
            <input type="text" class="form-control" name="f_name" value="<?php old('f_name'); ?>" placeholder="First Name...">
            <div class="msg-error"><?php errors('f_name'); ?></div>
        </div>
        <div class="w-50 right">
            <input type="text" class="form-control" name="l_name" value="<?php old('l_name'); ?>" placeholder="Last Name...">
            <div class="msg-error"><?php errors('l_name'); ?></div>
        </div>
        <div class="">
            <input type="email" class="form-control" name="email" value="<?php old('email'); ?>" placeholder="Email...">
            <div class="msg-error"><?php errors('email'); ?></div>
        </div>
        <div class="">
            <input type="text" class="form-control" name="phone" value="<?php old('phone'); ?>" placeholder="Phone Number...">
            <div class="msg-error"><?php errors('phone'); ?></div>
        </div>
        <div class="">
            <select name="gender" class="form-select" id="gender">
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="Custome">Custome</option>
            </select>
            <div class="msg-error"><?php errors('gender'); ?></div>
        </div>
        <div class="">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="msg-error"><?php errors('password'); ?></div>
        </div>
        <div class="">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
        </div>
        <div class="">
            <div>
                <input type="submit" class="w-100 p-2 my-3 btn btn-primary" value="Register">
                <a href="login.php" class="a-btn-right">Already have an account? Sign in</a>
            </div>
        </div>
    </form>
</div>

<?php
include '../../Layouts/footer.php';
?>