<?php

$name = "ahmed";


function displayName()
{
    // First way
    global $name;

    // Second Way
    echo $GLOBALS['name'];
}

displayName();
