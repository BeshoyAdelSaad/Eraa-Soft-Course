<?php

declare(strict_types = 1);


function displayName(string $name)
{
    echo $name . "<br>";
}
displayName(5);


function addIntegers(int $num1, int $num2)
{
    echo $num1 + $num2;
}

addIntegers(2, 6);