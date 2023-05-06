<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    require "../connection.php";

    $id = $_GET['id'];

    $query = "DELETE FROM customers WHERE id = $id";

    if (mysqli_query($connection, $query)) {

        mysqli_close($connection);
        $_SESSION['message'] = "The Customer was deleted successfully";
        redirect('pages/Customers/index');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
