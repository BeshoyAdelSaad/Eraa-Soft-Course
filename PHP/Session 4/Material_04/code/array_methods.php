<?php

$names = ['ali', 'mohamed', 'mahmoud', 'galal', 'morad'];

// var_dump(in_array(5, $numbers));

// array_push($numbers, 4);

// array_unshift($numbers, 0);

$new = array_slice($names, 2);

print_r($new);