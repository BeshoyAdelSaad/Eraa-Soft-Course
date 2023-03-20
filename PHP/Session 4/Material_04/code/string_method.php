<?php

/**
 * Explode string
 */
$string = "ali,mohamed,gala,morad";

$names = explode(',', $string);

print_r($names);

$newString = implode('/', $names);

echo '<br>';
echo $newString;