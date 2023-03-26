<?php

echo "<pre>";
print_r($_POST);
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

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "Hello my name is {$_POST['name']} and my age is {$_POST['age']}";
}