<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

include '../../Logic/connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $arr = array();
    foreach ($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE products SET name='{$arr['name']}', category_id= '{$arr['category_id']}', price= '{$arr['price']}' WHERE id='{$arr['id']}'";

    if (mysqli_query($connection, $query)) {
       
        mysqli_close($connection);
        $_SESSION['message'] = 'The Product was updated in the database successfully';
        redirect('pages/Products/index');
    }
} elseif ($_GET['id']) {


    $id = $_GET['id'];

    $query = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        $customer = $result->fetch_assoc();
        mysqli_close($connection);
        redirect('pages/Products/edit','?' . http_build_query($customer));
    } else {
        $message =  "There is no Product with this ID";
        redirect('pages/notFound','?message=' . $message);
    }
} else {
    redirect('pages/notFound');
}
