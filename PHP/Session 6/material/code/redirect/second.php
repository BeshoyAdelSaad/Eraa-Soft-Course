<?php

echo "<h1>hello from second page</h1>";

// Redirecting to the third page
header("Location: third.php");
exit;

setcookie("name", "test", time() + 60 * 60, "/");