<?php
// redirect method without add extention file
function redirect($path, $option = null)
{
    include "../../Layouts/init.php";
    header('Location: ' . $root . $path . '.php' . $option);
    exit();
}
