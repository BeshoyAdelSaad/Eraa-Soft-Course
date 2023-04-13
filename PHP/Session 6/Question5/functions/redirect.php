<?php

// redirect method without add extention file
function redirect($file_name)
{
    header('Location: ' . $file_name . '.php');
    exit;
}
