<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include '../Functions/redirect.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
       
        require "../connection.php";
        
        $id = $_GET['id'];
        
        $query = "DELETE FROM categories WHERE id = $id"; 

        if(mysqli_query($connection, $query)){
            
        mysqli_close($connection);

        $_SESSION['message'] = "The Category was deleted successfully";
        redirect('pages/Categories/index');
        
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
