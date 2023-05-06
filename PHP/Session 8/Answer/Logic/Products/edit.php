<?php
    if(session_status() === PHP_SESSION_NONE) session_start();

    include '../../Logic/connection.php';
    
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $arr = array();
        foreach($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE products SET name='{$arr['name']}', category_id= '{$arr['category_id']}', price= '{$arr['price']}' WHERE id='{$arr['id']}'";

    if(mysqli_query($connection, $query)){
        $_SESSION['message'] = 'The Product was updated in the database successfully';
        mysqli_close($connection);
        header('Location: ../../pages/Products/index.php');
        exit();
    }

    
    }elseif($_GET['id']) {


            $id = $_GET['id'];         
            
            $query = "SELECT * FROM products WHERE id = '$id'";
            $result = mysqli_query($connection, $query);
            if($result->num_rows > 0 ){
                $customer = $result->fetch_assoc();
                mysqli_close($connection);
                header('Location: ../../pages/Products/edit.php?'. http_build_query($customer));
                exit();
                
            }else {
                $message =  "There is no Product with this ID";
                header('Location: ../../pages/notFound.php?message='. $message);
                exit();
            }
    }else{
        header('Location: ../../pages/notFound.php');
        exit();
    }