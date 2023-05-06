<?php
if (session_status() == PHP_SESSION_NONE) session_start();

include '../Validation/sanitizer.php';
include '../Validation/validate.php';
include '../functions/redirect.php';
include "auth.php";

// check if the method is POST or not (method post is required)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($_POST as $key => $value) $$key = sanitization($value);

    foreach ($_POST as $key => $value) empty_input($key, $value);

    if (!empty($_SESSION['errors'])) redirect('pages/Auth/login');

    check_user($email, $password);
}
