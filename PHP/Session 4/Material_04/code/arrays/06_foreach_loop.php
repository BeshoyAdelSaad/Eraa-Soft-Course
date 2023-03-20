<?php

echo "<h3>Foreach with indexed array</h3>";

$names = ['omar', 'mohamed', 'abdo', 'besho', 'alaa', 'mo3az'];

foreach($names as $name) {

    echo $name;
    echo '<br>';
}

echo "<h3>Foreach with associative array</h3>";

$person = [
    'name'      => 'abdo',
    'age'       => 13,
    'country'   => 'Egypt',
];

foreach($person as $x => $z) {

    echo "The key is $x, and the value is $z";
    echo '<br>';
}

$persons = [
    1   => ['name' => 'omar', 'age' => 13],
    2   => ['name' => 'ali', 'age' => 20],
    3   => ['name' => 'abdo', 'age' => 30],
];

foreach($persons as $personNumber => $personData)
{
    echo "I'm in person number $personNumber, 
    his name is {$personData['name']}, 
    and his age is {$personData['age']}";

    echo '<br>';
}
