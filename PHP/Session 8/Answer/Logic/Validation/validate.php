<?php
if (session_status() == PHP_SESSION_NONE) session_start();

function empty_input($key, $val)
{
    if (empty($val)) $_SESSION['errors'][$key] = "Sorry, The $key is required";
}
function min_str($key, $val, $length)
{
    if (strlen($val) < $length) $_SESSION['errors'][$key] = "Sorry, The $key must be greater than $length characters";
}
function max_str($key, $val, $length)
{
    if (strlen($val) > $length) $_SESSION['errors'][$key] = "Sorry, The $key must be less than $length characters";
}
function email($key, $val)
{
    if (!filter_var($val, FILTER_VALIDATE_EMAIL)) $_SESSION['errors'][$key] = "Sorry, Please enter a valid email!";
}

function unique($table, $column, $val)
{
    include '../connection.php';
    $query = "SELECT * FROM $table WHERE $column= '$val'";

    $sql = mysqli_query($connection, $query);
    mysqli_close($connection);
    
    if (mysqli_num_rows($sql) !== 0) $_SESSION['errors'][$column] = "Sorry, this $column already exists";
}

function phone($key, $val)
{
    if ((strlen($val) !== 11) && $val[0] !== 0) $_SESSION['errors'][$key] = "Sorry, Please enter a valid phone number";
}

function pass_confirm($val, $val_confirm)
{
    if ($val !== $val_confirm) $_SESSION['errors']['password'] = "Sorry, The password field confirmation does not match.";
}
