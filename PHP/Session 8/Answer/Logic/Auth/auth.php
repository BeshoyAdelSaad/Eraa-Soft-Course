<?php
if (session_status() == PHP_SESSION_NONE) session_start();

function check_user($email, $pass)
{
    include "../connection.php";

    $query = "SELECT f_name FROM users WHERE phone='$email' AND  password= '$pass' OR email='$email' AND password= '$pass'";

    $sql = mysqli_query($connection, $query);

    $data = $sql->fetch_assoc();

    mysqli_close($connection);

    if (mysqli_num_rows($sql) === 0) {
        $_SESSION['errors']['email'] = "Invalid email or password";
        redirect('pages/Auth/login');
    } else {
        $_SESSION['message'] = "Welcome " . $data['f_name'];
        $_SESSION['login'] = $data['f_name'];
        redirect('index');
    }
}