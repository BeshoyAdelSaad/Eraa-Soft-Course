<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    require '../connection.php';
    $customer_id = $_POST['customer_id'];
    $total = $_POST['total'];
    $shipping_address_id = $_POST['shipping_address_id'];
    $status = $_POST['status'];

    $query = "INSERT INTO orders VALUES ('', '$customer_id', '$total', '$shipping_address_id', '$status')";
    mysqli_query($connection, $query);
    
    $_SESSION['message'] = 'Your Order recorded in the database successfully';
    header('Location: ../../pages/Orders/index.php');
    $connection->close();
    exit();

}else {
        $message = 'Something Went Wrong!';
        header('Location: ../../pages/notFound.php?message='. $message);
        exit();
}


?>