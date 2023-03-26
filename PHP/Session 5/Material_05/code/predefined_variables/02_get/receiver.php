<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name'])) {

    echo "Hello my name is {$_GET['name']} and my age is {$_GET['age']}";
}