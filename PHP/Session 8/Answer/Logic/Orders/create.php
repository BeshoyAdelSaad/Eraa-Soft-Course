<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../connection.php';
    $customer_id = $_POST['customer_id'];
    $total = $_POST['total'];
    $shipping_address_id = $_POST['shipping_address_id'];
    $status = $_POST['status'];

    $query = "INSERT INTO orders VALUES ('', '$customer_id', '$total', '$shipping_address_id', '$status')";
    mysqli_query($connection, $query);

    mysqli_close($connection);
    $_SESSION['message'] = 'Your Order recorded in the database successfully';
    redirect('pages/Orders/index');
} else {
    $message = 'Something Went Wrong!';
    redirect('pages/notFound', '?message=' . $message);
}
