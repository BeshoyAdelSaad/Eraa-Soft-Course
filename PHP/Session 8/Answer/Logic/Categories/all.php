<?php
if (session_status() === PHP_SESSION_NONE) session_start();

include '../../logic/connection.php';

$query = "SELECT * FROM categories";

$data = mysqli_query($connection, $query);

$data_length = mysqli_num_rows($data);

mysqli_close($connection);

if (mysqli_num_rows($data) === 0) $_SESSION['empty'] = "There Is No Category In The Database";











