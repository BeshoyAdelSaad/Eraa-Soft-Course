<?php

if(session_status() == PHP_SESSION_NONE) session_start();

require_once 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    // Sanitize Inputs
    foreach($_POST as $key => $value) $$key = sanitizeInput($value);

    // Check name is required
    if(empty($name)) $errors[] = "The name is required!";

    // Minimum allowed length
    if(strlen($name) < 3) $errors[] = "Name should be greater than 3 characters!";

    // Maximum allowed length
    if(strlen($name) > 10) $errors[] = "Name should be less than 10 characters!";

    // Check email is required
    if(empty($email)) $errors[] = "The email is required!";

    // 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Please enter a valid email!";

    // Check age is required
    if(empty($age)) $errors[] = "The age is required!";

    if(empty($errors)) {

        $filePath = "../data.json";

        // Handle adding new element to the array
        $students = json_decode(file_get_contents($filePath), true);

        $newStudent = [
            'name'  => $name,
            'email'  => $email,
            'age'  => $age,
        ];
        $students[] = $newStudent;

        // Finally store the date to JSON file
        file_put_contents($filePath, json_encode($students));

        $_SESSION['success'] = "Student Added successfully";
        redirect("../index.php");

    } else {
        $_SESSION['errors'] = $errors;
        redirect("../pages/create.php");
    }
}