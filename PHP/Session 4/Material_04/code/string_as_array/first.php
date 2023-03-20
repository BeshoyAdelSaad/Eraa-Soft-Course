<?php

$string = "Ali mohamed";

// echo $string[10];

$size = strlen($string);

echo $string[$size-1];
echo '<br>';

$string[-1] = 'f';


$string[500] = 'b';
echo $string;