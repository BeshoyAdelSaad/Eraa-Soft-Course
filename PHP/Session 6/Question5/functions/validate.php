<?php
$GLOBALS['errors'] = [];
function empty_input($key, $value)
{
    if(empty($value))  return $GLOBALS['errors'][$key] = "Sorry, The $key is required";
}
function min_str($key, $value)
{
    if(strlen($value) < 3) return $GLOBALS['errors'][$key] = "Sorry, The $key must be greater than 3 characters";
}
function max_str($key, $value)
{
    if(strlen($value) > 10) return $GLOBALS['errors'][$key] = "Sorry, The $key must be less than 10 characters";
}
function email($key, $value)
{
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) $GLOBALS['errors'][$key] = "Sorry, Please enter a valid email!";
}

function unique($value)
{

}
function phone($key, $value)
{
    if (strlen($value) != 11) return $GLOBALS['errors'][$key] = "Sorry, Please enter a valid phone";

}

function pass_confirm($value, $confirmation)
{
    if($value != $confirmation) return $GLOBALS['errors']['password'] = "Sorry, The password field confirmation does not match.";
}

function check_user($email, $password)
{
    $pathJSON = '../database/jsonfile.json';

    $users_file = fopen($pathJSON, 'r');

    $data = fread($users_file, filesize($pathJSON));
    $users = json_decode($data, true);
    fclose($users_file);
    $emails[] = '';

    foreach ($users as $k => $v) foreach ($v as $emailKey => $emailValue) if ($emailKey == 'email') $emails[] = $emailValue;

    if (array_search($email, $emails)) 
    {
        redirect('../index');

    }else{
        $_SESSION['errors']['email'] = 'Invalid email or password';
        redirect('../auth/login');
    }
}