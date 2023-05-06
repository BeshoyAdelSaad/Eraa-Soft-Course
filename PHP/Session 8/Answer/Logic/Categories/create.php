<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    require '../connection.php';
    $name = $_POST['name'];


    $query = "INSERT INTO categories VALUES ('', '$name')";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    
    $_SESSION['message'] = 'The Category recorded in the database successfully';
    redirect('pages/Categories/index');
 

}else{
    $message =  'Something Went Wrong!';
    redirect("pages/notFound","?message=" . $message);
}



?>