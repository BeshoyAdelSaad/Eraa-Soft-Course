<?php

$firstName = "omar";

// escape sequences works with double quotes
$name = "mohamed \n els3edy";

// I can display variable inside double quotes
$phrase = "my name is $firstName ";

// string with complex curly braces
$phrase = "my name is {$firstName} ";

echo $phrase;

