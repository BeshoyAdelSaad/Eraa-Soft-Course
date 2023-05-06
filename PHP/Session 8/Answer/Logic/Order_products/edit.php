<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';
include '../../Logic/connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $arr = array();
    foreach ($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE order_products SET order_id='{$arr['order_id']}', product_id= '{$arr['product_id']}', product_quantit= '{$arr['product_quantit']}', price= '{$arr['price']}' WHERE id='{$arr['id']}'";

    if (mysqli_query($connection, $query)) {
        $_SESSION['message'] = 'Your Order Products was updated in the database successfully';
        mysqli_close($connection);
        redirect('pages/Order_products/index');
    }
} elseif ($_GET['id']) {


    $id = $_GET['id'];

    $query = "SELECT * FROM order_products WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        $customer = $result->fetch_assoc();
        mysqli_close($connection);
        redirect('pages/Order_products/edit', '?' . http_build_query($customer));
    } else {
        $message =  "There is no Order with this ID";
        redirect('pages/notFound', '?message=' . $message);
    }
} else {
    redirect('pages/notFound');
}
