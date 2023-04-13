<?php
if (session_status() == PHP_SESSION_NONE) session_start();
// include '../functions/handel_form.php';

function Sanitization($input)
{
    return htmlspecialchars(htmlentities(stripslashes(trim($input))));
}

function errors($input_name){

    if(!empty($_SESSION['errors']))
    {
        if(isset($_SESSION['errors'][$input_name]))
        {
            echo "{$_SESSION['errors'][$input_name]}";
            unset($_SESSION['errors'][$input_name]);
        }
    }
}

