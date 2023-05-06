<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include "Layouts/init.php";
include "Layouts/header.php";
include "Layouts/navegation.php";
?>

<?php
if (isset($_SESSION['message'])) {
    echo "<div id='message-alert' class='message-d'>" .
        "<p class='message-p'>" . $_SESSION['message'] . "</p>" .
        "</div>";
    unset($_SESSION['message']);
}
?>
<h1 class="text-center bg-success p-2">Home page</h1>

<?php
include 'Layouts/footer.php';
?>