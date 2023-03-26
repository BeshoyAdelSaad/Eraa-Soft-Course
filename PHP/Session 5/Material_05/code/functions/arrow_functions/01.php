<?php

$y = 10;

/**
 * Example about arrow function
 */
$arrowFunc = fn($x) => $x + $y;
$arrowFunc(5);


/**
 * Arrow function can't modify variables in outer scope
 */
$func = fn() => ++$y;
echo $func();

echo $y;