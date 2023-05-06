<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';
include '../../Logic/connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $arr = array();
    foreach ($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE categories SET name='{$arr['name']}' WHERE id='{$arr['id']}'";

    if (mysqli_query($connection, $query)) {
        mysqli_close($connection);
        $_SESSION['message'] = 'The Category was updated in the database successfully';
        redirect('pages/Categories/index');
    }
} elseif ($_GET['id']) {

    $id = $_GET['id'];

    $query = "SELECT * FROM categories WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    if ($result->num_rows > 0) {
        $customer = $result->fetch_assoc();
        redirect('pages/Categories/edit', '?' . http_build_query($customer));
    } else {
        $message =  "There is no Category with this ID";
        redirect('pages/notFound', '?message=' . $message);
    }
} else {
    redirect('pages/notFound');
}
