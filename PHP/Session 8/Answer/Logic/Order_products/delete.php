<?php
if (session_status() === PHP_SESSION_NONE) session_start();

    if($_GET['id']){
       
        require "../connection.php";
        
        $id = $_GET['id'];
        
        $query = "DELETE FROM order_products WHERE id = $id"; 

        if(mysqli_query($connection, $query)){

        $_SESSION['message'] = "Your Order Products was removed successfully";
        header('Location: ../../pages/Order_products/index.php');
        mysqli_close($connection);
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
