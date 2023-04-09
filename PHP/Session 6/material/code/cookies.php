<?php

// Create a cookie
setcookie('age', 20, time() + 60 * 60, '/');

// Modify a cookie
setcookie('age', 30, time() + 60 * 60, '/');



// Get a cookie
if(isset($_COOKIE['name'])) {   // null safety
    echo $_COOKIE['name'];
}


// Delete a cookie
setcookie('age', '', time() - 60 * 60, '/');
