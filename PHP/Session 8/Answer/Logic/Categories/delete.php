<?php
if (session_status() === PHP_SESSION_NONE) session_start();

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
       
        require "../connection.php";
        
        $id = $_GET['id'];
        
        $query = "DELETE FROM categories WHERE id = $id"; 

        if(mysqli_query($connection, $query)){

        $_SESSION['message'] = "The Category was deleted successfully";
        header('Location: ../../pages/Categories/index.php');
        mysqli_close($connection);
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
