<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    require '../connection.php';
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $name = $_POST['name'];

    $query = "INSERT INTO products VALUES ('', '$category_id', '$name', '$price')";
    mysqli_query($connection, $query);
    
    $_SESSION['message'] = 'The Product recorded in the database successfully';
    header('Location: ../../pages/Products/index.php');
    $connection->close();
    exit();

}else{
    echo 'Something Went Wrong!';
    
}



?>