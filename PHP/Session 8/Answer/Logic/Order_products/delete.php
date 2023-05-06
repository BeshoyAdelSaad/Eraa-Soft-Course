<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if ($_GET['id']) {

    require "../connection.php";

    $id = $_GET['id'];

    $query = "DELETE FROM order_products WHERE id = $id";

    if (mysqli_query($connection, $query)) {

        mysqli_close($connection);
        $_SESSION['message'] = "Your Order Products was removed successfully";
        redirect('pages/Order_products/index');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
