<?php

$int = 100.5;

if(!filter_var($int, FILTER_VALIDATE_INT)) {

    echo "This is not valid integer";
}