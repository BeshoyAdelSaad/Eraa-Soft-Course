<?php

/**
 * many ways to define arrays
 */
// echo "<h3>many ways to define arrays</h3>";
// $array = array("fady", "s3edy", "maro");
// $array = ["ahmed", "asli", "morad"];
// var_dump($array);

// echo '<br>';

echo "<h3></h3>";

// Assign automatically
$names = ['omar', 'mo3az', '3laa2', 'ahmed'];

// Assign manually
// $names[0] = 'omar';
// $names[1] = 'mo3az';

// Retrieve element from array
echo $names[3];

// Override element in array
$names[2] = 'morad';

// use echo or print with array
// echo $names;

// Array can hold different values with different data type
$array = ['string', 10, true, 3.5, false];

$names[] = 'besho';
$names[] = 'abdelhamed';

array_push($names, 'abdelrahman');

echo "<pre>";
print_r($names);
echo "</pre>";


$personNames = ['omar', ' els3edy'];

$fullName = $personNames[0] . $personNames[1];

echo $fullName;