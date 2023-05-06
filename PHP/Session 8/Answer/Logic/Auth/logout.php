<?php
if (session_status() == PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if ($_GET['logout']) {

    session_unset();
    session_destroy();
    redirect('index');
}
