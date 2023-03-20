<?php

$person = [

    'name'      => ['mohamed', 'omar'],
    'age'       => 25,
    'country'   => 'Egypt',

];

echo $person['name'][1];
echo '<br>';

// $person['country'] = 'UK';

// echo $person['country'];


// echo "<pre>";
// print_r($person);
// echo "</pre>";


$associativeArray = [

    "8"     => 'casting from string to integer',
    
    // 8.7     => 'casting from float to integer',

    9           => 'value of integer key 9',

    true    => 'casting from boolen (true) to integer',

    false    => 'casting from boolen (false) to integer',

    null    => 'casting from null to empty string',

    null    => 'casting from null to empty string',

    12      => 'lsdkjf',

    11      => 'lksdjf',

    5       => 'number five',

    5       => 'five',
];




// echo $associativeArray["8"];
// echo '<br>';
// echo $associativeArray[8];

// echo $associativeArray[''];

echo $associativeArray[5];


// $associativeArray[] = 'test adding value';

echo "<pre>";
print_r($associativeArray);
echo "</pre>";