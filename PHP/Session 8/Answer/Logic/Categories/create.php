<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    require '../connection.php';
    $name = $_POST['name'];


    $query = "INSERT INTO categories VALUES ('', '$name')";
    mysqli_query($connection, $query);
    
    $_SESSION['message'] = 'The Category recorded in the database successfully';
    header('Location: ../../pages/Categories/index.php');
    $connection->close();
    exit();

}else{
    $message =  'Something Went Wrong!';
    header("Location: ../../pages/notFound.php?message=" . $message);
    exit();
}



?>