<?php

$filePath = "json_in_file.json";

$users = [
    ['ahmed', 20],
    ['ali', 30],
    ['omar', 25],
];

// $users = [
//     'first' => ['ahmed', 20],
//     'second' => ['ali', 30],
//     'third' => ['omar', 25],
// ];

// Convert array to JSON and put it into json file
file_put_contents($filePath, json_encode($users));

// Read an array from Json file
$usersFromFile = json_decode(file_get_contents($filePath), true);

dd($usersFromFile);

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    exit;
}