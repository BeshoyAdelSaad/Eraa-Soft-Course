<?php

echo "<h3>Assign by value</h3>";
$first = "omar";
$second = $first;   // (assign by value)

$second = "abdo";
echo $first;


echo "<br>";


echo "<h3>Assign by reference</h3>";

$one = "omar";

$two = &$one;   // (assign by reference)

$two = "abdo";

echo $one;