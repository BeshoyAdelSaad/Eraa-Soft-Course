<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

include '../../Logic/connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $arr = array();
    foreach ($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE customers SET name='{$arr['name']}', address= '{$arr['address']}', tel= '{$arr['tel']}', email= '{$arr['email']}' WHERE id='{$arr['id']}'";

    if (mysqli_query($connection, $query)) {
        $_SESSION['message'] = 'The Customer was updated in the database successfully';
        mysqli_close($connection);
        redirect('pages/Customers/index');
    }
} elseif ($_GET['id']) {


    $id = $_GET['id'];

    $query = "SELECT * FROM customers WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);

    if ($result->num_rows > 0) {
        $customer = $result->fetch_assoc();
        redirect('pages/Customers/edit', '?' . http_build_query($customer));
        exit();
    } else {
        $message =  "There is no customer with this ID";
        redirect('pages/notFound', '?message=' . $message);
    }
} else {
    redirect('pages/notFound');
}
