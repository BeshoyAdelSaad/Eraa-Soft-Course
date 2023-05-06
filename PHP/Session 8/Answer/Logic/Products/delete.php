<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    require "../connection.php";

    $id = $_GET['id'];

    $query = "DELETE FROM products WHERE id = $id";

    if (mysqli_query($connection, $query)) {

        mysqli_close($connection);
        $_SESSION['message'] = "The Product was deleted successfully";
        redirect('pages/Products/index');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
