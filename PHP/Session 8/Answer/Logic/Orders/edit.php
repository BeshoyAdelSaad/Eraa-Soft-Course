<?php
    if(session_status() === PHP_SESSION_NONE) session_start();

    include '../../Logic/connection.php';
    
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $arr = array();
        foreach($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE orders SET customer_id='{$arr['customer_id']}', total= '{$arr['total']}', shipping_address_id= '{$arr['shipping_address_id']}', status= '{$arr['status']}' WHERE id='{$arr['id']}'";

    if(mysqli_query($connection, $query)){
        $_SESSION['message'] = 'Your Order was updated in the database successfully';
        mysqli_close($connection);
        header('Location: ../../pages/Orders/index.php');
        exit();
    }
    }elseif($_GET['id']) {


            $id = $_GET['id'];         
            
            $query = "SELECT * FROM orders WHERE id = '$id'";
            $result = mysqli_query($connection, $query);
            if($result->num_rows > 0 ){
                $customer = $result->fetch_assoc();
                mysqli_close($connection);
                header('Location: ../../pages/Orders/edit.php?'. http_build_query($customer));
                exit();
                
            }else {
                $message =  "There is no Order with this ID";
                header('Location: ../../pages/notFound.php?message='. $message);
                exit();
            }
    }else{
        header('Location: ../../pages/notFound.php');
        exit();
    }