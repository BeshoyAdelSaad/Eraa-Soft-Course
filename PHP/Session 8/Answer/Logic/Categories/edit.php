<?php
    if(session_status() === PHP_SESSION_NONE) session_start();

    include '../../Logic/connection.php';
    
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $arr = array();
        foreach($_POST as $key => $value) $arr[$key] = $value;

    $query = "UPDATE categories SET name='{$arr['name']}' WHERE id='{$arr['id']}'";

    if(mysqli_query($connection, $query)){
        $_SESSION['message'] = 'The Category was updated in the database successfully';
        $connection->close();
        header('Location: ../../pages/Categories/index.php');
        exit();
    }
    }elseif($_GET['id']) {

            $id = $_GET['id'];         
            
            $query = "SELECT * FROM categories WHERE id = '$id'";
            $result = mysqli_query($connection, $query);
            if($result->num_rows > 0 ){
                $customer = $result->fetch_assoc();
                mysqli_close($connection);
                header('Location: ../../pages/Categories/edit.php?'. http_build_query($customer));
                exit();
                
            }else {
                $message =  "There is no Category with this ID";
                header('Location: ../../pages/notFound.php?message='. $message);
                exit();
            }
    }else{
        header('Location: ../../pages/notFound.php');
        exit();
    }