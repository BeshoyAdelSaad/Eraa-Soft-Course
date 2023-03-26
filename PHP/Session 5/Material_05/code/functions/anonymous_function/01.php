<?php

// This will through an error
// function ($name)
// {
//     echo $name;
// }

// Conventionally wrong
// function ($name)
// {
//     echo $name;
// };

$greetings = function($name) {

    echo $name;
    echo "<br>";
};

$greetings('ahmed');



$name = 'morad';




/**
 * Inheriting variables from the parent scope with use()
 */
$func = function() use($name) {

    echo $name;

};
$func();
echo "<br>";

/**
 * Anonymous function as a callback using array_map() built-in function
 */

$numbers = [1, 2, 3];

$newArray = array_map(

    function (int $number) {
    return $number + 5;

}, $numbers);

var_dump($numbers);
echo "<br>";
var_dump($newArray);