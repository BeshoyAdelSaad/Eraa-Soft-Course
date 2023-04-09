<?php

if(session_status() == PHP_SESSION_NONE) session_start();

// Assign
$_SESSION['name'] = 'moaz <br>';
$_SESSION['age'] = 20;

// Get
echo $_SESSION['name'];

// Modify
$_SESSION['name'] = 'ahmed';

echo $_SESSION['age'];

echo $_SESSION['age'];

var_dump($_SESSION);

echo "<br>";

/**
 * Delete the entire session global variable properly
 */

// empty the session global variable
$_SESSION = [];

// remove all session variables
session_unset();

// destroy the session
session_destroy();

var_dump($_SESSION);

echo "<br>";