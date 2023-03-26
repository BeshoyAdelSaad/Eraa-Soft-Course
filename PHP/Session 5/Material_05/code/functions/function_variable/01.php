<?php

function greetings()
{
    echo "Hello my name is ali";
    echo "<br>";
    echo "I'm in back-end course now";
}

$funcName = "greetings";
$funcName();    // Equivalent to greetings()

/**
 * this is wrong
 */
$string = "echo";
$string();  // through error