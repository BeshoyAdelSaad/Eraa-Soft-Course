<?php


function addFive(&$number)
{
    $number += 5;
}

$number = 5;

addFive($number);
echo $number;