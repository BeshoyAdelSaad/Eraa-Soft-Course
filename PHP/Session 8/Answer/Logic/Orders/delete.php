<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if ($_GET['id']) {

    require "../connection.php";

    $id = $_GET['id'];

    $query = "DELETE FROM orders WHERE id = $id";

    if (mysqli_query($connection, $query)) {

        mysqli_close($connection);
        $_SESSION['message'] = "Your Order was removed successfully";
        redirect('pages/Orders/index');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
