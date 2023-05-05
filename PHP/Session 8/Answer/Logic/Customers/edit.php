<?php
    if(session_status() === PHP_SESSION_NONE) session_start();

    include '../../Logic/connection.php';
    
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $arr = array();
        foreach($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE customers SET name='{$arr['name']}', address= '{$arr['address']}', tel= '{$arr['tel']}', email= '{$arr['email']}' WHERE id='{$arr['id']}'";

    if(mysqli_query($connection, $query)){
        $_SESSION['message'] = 'The Customer was updated in the database successfully';
        $connection->close();
        header('Location: ../../pages/Customers/index.php');
        exit();
    }
    }elseif($_GET['id']) {


            $id = $_GET['id'];         
            
            $query = "SELECT * FROM customers WHERE id = '$id'";
            $result = mysqli_query($connection, $query);
            if($result->num_rows > 0 ){
                $customer = $result->fetch_assoc();
                mysqli_close($connection);
                header('Location: ../../pages/Customers/edit.php?'. http_build_query($customer));
                exit();
                
            }else {
                $message =  "There is no customer with this ID";
                header('Location: ../../pages/notFound.php?message='. $message);
                exit();
            }
    }else{
        header('Location: ../../pages/notFound.php');
        exit();
    }