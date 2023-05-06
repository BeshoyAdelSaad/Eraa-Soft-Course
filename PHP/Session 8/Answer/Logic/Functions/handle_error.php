<?php
function errors($input_name)
{

    if (!empty($_SESSION['errors'])) {
        if (isset($_SESSION['errors'][$input_name])) {
            echo "{$_SESSION['errors'][$input_name]}";
            unset($_SESSION['errors']);
        }
    }
}
