<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    require '../connection.php';
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $query = "INSERT INTO customers VALUES ('', '$name', '$address', '$tel', '$email')";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    
    $_SESSION['message'] = 'The Customer recorded in the database successfully';
    redirect('pages/Customers/index');

}else{
    echo 'Something Went Wrong!';
    
}
