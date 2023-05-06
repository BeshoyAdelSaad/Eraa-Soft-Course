<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    require '../connection.php';
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $name = $_POST['name'];

    $query = "INSERT INTO products VALUES ('', '$category_id', '$name', '$price')";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    
    $_SESSION['message'] = 'The Product recorded in the database successfully';
    redirect('pages/Products/index');

}else{
    echo 'Something Went Wrong!';
    
}
