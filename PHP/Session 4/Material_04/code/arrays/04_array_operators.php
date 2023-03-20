<?php

/**
 * Union operator
 */
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6, 7, 8];

$a = [
    0 => 1,
    1 => 2,
    2 => 3,
];

$b = [
    3 => 4,
    4 => 5,
    5 => 6,
];

$unionedArray = $arr1 + $arr2;

echo "<pre>";
print_r($unionedArray);
echo "</pre>";

/**
 * Equality operator (==)
 */

$a = [1, "2", 3];

$b = [1, 2, 3];

var_dump($a === $b);