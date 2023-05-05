<?php
if (session_status() === PHP_SESSION_NONE) session_start();

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
       
        require "../connection.php";
        
        $id = $_GET['id'];
        
        $query = "DELETE FROM products WHERE id = $id"; 

        if(mysqli_query($connection, $query)){

        $_SESSION['message'] = "The Product was deleted successfully";
        header('Location: ../../pages/Products/index.php');
        mysqli_close($connection);
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
