<?php

/*
Q1: You have this array $names = ['ahmed', 'kareem', 'ali', 'omar'];
Step1: using for loop and $names array.

Step2: generate new array called $newNames which its value is 
['omar', 'ali', 'kareem', 'ahmed'].
*/

$names = ['ahmed', 'kareem', 'ali', 'omar'];

$newNames = [];

$size = count($names) - 1;

for($i = $size; $i >= 0; $i--) {

    $newNames[] = $names[$i];
}
echo "<h3>First Array</h3>";
echo "<pre>";
print_r($names);
echo "</pre>";

echo "<h3>Second Array</h3>";
echo "<pre>";
print_r($newNames);
echo "</pre>";