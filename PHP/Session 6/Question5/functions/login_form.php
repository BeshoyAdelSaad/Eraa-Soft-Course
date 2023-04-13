<?php
if (session_status() == PHP_SESSION_NONE) session_start();
include 'sanitizer.php';
include 'validate.php';
include 'redirect.php';

// check if the method is POST or not (method post is required)
if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    foreach($_POST as $key => $value ) [$key] = sanitization($value);

    foreach ($_POST as $key => $value) empty_input($key, $value);
    check_user($_POST['email'], $_POST['password']);
    
    if (!empty($GLOBALS['errors'])) {
        $_SESSION['errors'] = $GLOBALS['errors'];
        return redirect('../auth/login');
    }


    

   
}