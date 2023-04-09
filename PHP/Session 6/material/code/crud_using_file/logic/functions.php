<?php

function sanitizeInput($input)
{
    return htmlspecialchars(htmlentities(stripslashes(trim($input))));
}

function minVal(string $value, int $length) : bool
{
    if(strlen($value) < $length) {
        return true;
    } else {
        return false;
    }

    // TASK use ternary operator
}

function maxVal(string $value, int $length) : bool
{
    if(strlen($value) > $length) {
        return true;
    } else {
        return false;
    }

    // TASK use ternary operator
}

function redirect($location)
{
    header("Location: $location");
    exit;
}

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    exit;
}