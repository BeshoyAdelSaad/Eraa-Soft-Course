<?php

/**
 * integer + integer    => integer
 * string(numeric) + string(numeric)      => integer
 * string(numeric) + integer     => integer
 * string(with text) + integer  => integer (WARNING!)
 * integer + float      => float
 */

$breakNewline = "<br> \n";

echo 4 + 4;

echo $breakNewline;

echo "4" + "4";     // output: 8 (integer)

echo $breakNewline;

echo "4" + 4;       // output: 8 (integer)

echo $breakNewline;

echo 4 + "4books";     // output: 8 (WARNING!!)

echo $breakNewline;

echo 4 + "books";       // output: fatal error

echo $breakNewline;

echo 4 + "books 4";      // output: fatal error

echo $breakNewline;

echo 4 + "books4";      // output: fatal error

echo $breakNewline;

echo 4.2 + 4;           // output:
var_dump(4.2 + 4);