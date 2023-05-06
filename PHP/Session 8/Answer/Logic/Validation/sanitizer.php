<?php
if (session_status() == PHP_SESSION_NONE) session_start();
// include '../functions/handel_form.php';

function Sanitization($input)
{
    return htmlspecialchars(htmlentities(stripslashes(trim($input))));
}



