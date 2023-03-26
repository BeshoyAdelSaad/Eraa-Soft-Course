<?php

$email = "ahmed@gmail.com";

// if(!) {

//     echo "This is not valid email";
// }

var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));