<?php
if (session_status() == PHP_SESSION_NONE) session_start();
require_once '../Validation/sanitizer.php';
require_once '../Validation/validate.php';
require_once '../Functions/redirect.php';

// check if the method is POST or not (method post is required)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach($_POST as $k => $v) $_SESSION['old_'.$k] = $v;

    foreach ($_POST as $key => $value) $inputs[$key] = sanitization($value);

    // Validation For All inputs
    foreach ($inputs as $key => $value) {

        if ($key == "f_name" || $key == "l_name") {
            min_str($key, $value, 3);
            max_str($key, $value, 50);
        }

        if ($key == 'email') {
            email($key, $value);
            unique('users', 'email', $value);
        }

        if ($key == 'phone') {
            phone($key, $value);
            unique('users', 'phone', $value);
        }

        if ($key == 'password') pass_confirm($value, $inputs['password_confirmation']);
        empty_input($key, $value);
        if ($key == "password_confirmation") continue;
    }

    if (!empty($_SESSION['errors'])) redirect('pages/Auth/register');

    foreach ($_POST as $k => $v) unset($_SESSION['old_'.$k]);

    include '../connection.php';

    $query = "INSERT INTO users 
        VALUES ('', 
            '{$inputs['f_name']}', 
            '{$inputs['l_name']}', 
            '{$inputs['email']}', 
            '{$inputs['phone']}', 
            '{$inputs['password']}', 
            '{$inputs['gender']}')";

    $sql = mysqli_query($connection, $query);

    $_SESSION['message'] = 'You are registered successfully';
    $_SESSION['login'] = $inputs['f_name'];
    redirect('index');
} else {
    redirect('pages/notFound');
}
