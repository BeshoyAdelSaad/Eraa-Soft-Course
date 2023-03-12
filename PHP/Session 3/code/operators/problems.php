<?php

/**
 * First
 */
$num1 = 5;
$num2 = 5;

$sum = $num1 + $num2;
echo $sum;

echo "<br>";


/**
 * 
 */
$a = 4;

// Post-increment
echo "<h3>using post-increment</h3>";
$a++;
echo "I have " . $a . " books";


$a = 4;
// pre-increment
echo "<h3>using pre-increment</h3>";
echo "I have " . ++$a . " books";


echo "<br>";

/**
 * 
 */

$sentence = "";
$first = "In";
$second = "PHP";
$third = "Course";

$sentence .= $first;

$sentence .= " ";

$sentence .= $second . " ";

$sentence .= $third;

echo $sentence;