<?php
if (session_status() == PHP_SESSION_NONE) session_start();
require_once 'sanitizer.php';
require_once 'validate.php';
require_once 'redirect.php';


// check if the method is POST or not (method post is required)
if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    foreach($_POST as $key => $value ) $form_inputs [$key] = sanitization($value); 
   
    $pathJSON = '../database/jsonfile.json';

    $users = json_decode(file_get_contents($pathJSON),true);

    
    // All inputs are required
    foreach($form_inputs as $key=>$value) 
    {
        if($key == "name" || $key == "password"){
            min_str($key, $value);
            max_str($key, $value);
        }
        if($key == 'email') email($key, $value);
        if($key == 'phone') phone($key ,$value);
        if($key == 'password') pass_confirm($value, $form_inputs['password_confirmation']);
            empty_input($key, $value);
        if($key == "password_confirmation") continue;
    }




    if(!empty($GLOBALS['errors'])) 
    {
        $_SESSION['errors'] = $GLOBALS['errors'];
        return redirect('../auth/register');
    }
        
    $users [] = $form_inputs;

    file_put_contents($pathJSON, json_encode($users));

    $_SESSION['Seccess'] = 'You are registered successfully';

    // record user email in session
    $_SESSION['user_email'] = $email;
    // record user name in session
    $_SESSION['user_name'] = $name;

    redirect('../index');

}else{
    return redirect('../auth/login');


}