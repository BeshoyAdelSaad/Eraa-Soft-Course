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

function old($input_name)
{

    if (isset($_SESSION['old_' . $input_name])) {
        echo "{$_SESSION['old_' .$input_name]}";
        unset($_SESSION['old_' . $input_name]);
    }
}
