<?php
if (session_status() === PHP_SESSION_NONE) session_start();

    if($_GET['id']){
       
        require "../connection.php";
        
        $id = $_GET['id'];
        
        $query = "DELETE FROM orders WHERE id = $id"; 

        if(mysqli_query($connection, $query)){

        $_SESSION['message'] = "Your Order was removed successfully";
        header('Location: ../../pages/Orders/index.php');
        mysqli_close($connection);
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
