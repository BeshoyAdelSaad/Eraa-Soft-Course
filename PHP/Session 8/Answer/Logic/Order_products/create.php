<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../connection.php';
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];
    $price = $_POST['price'];

    $query = "INSERT INTO order_products VALUES ('', '$order_id', '$product_id', '$product_quantity', '$price')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    $_SESSION['message'] = 'Your Order Products recorded in the database successfully';
    redirect('pages/Order_products/index');
} else {
    $message = 'Something Went Wrong!';
    redirect('pages/notFound', '?message=' . $message);
}
