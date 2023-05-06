<?php
// redirect method without add extention file
function redirect($path)
{
    include "../../Layouts/init.php";
    header('Location: ' . $root . $path . '.php');
    exit();
}
