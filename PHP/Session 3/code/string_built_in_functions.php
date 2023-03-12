<?php

$breakNewline = "<br> \n";

/**
 * strlen()
 */
$name = " besho";
echo strlen($name);

echo $breakNewline;

/**
 * strtolower
 */
$name = 'ALI';
echo strtolower($name);

echo $breakNewline;

/**
 * str_shuffle
 */
$sentence = "Hello my name is alex I'm in the back-end diploma";
echo str_shuffle($sentence);

/**
 * str_repeat
 */
$sentence = "Hello my name is alex I'm in the back-end diploma<br>";
echo str_repeat($sentence, 2);

/**
 * rtrim
 */
$name = " Eman php";
$name = "Eman ";
echo rtrim($name);

echo $breakNewline;

/**
 * nl2br
 */
$sentence = "I \n love \n Javascript";
echo nl2br($sentence);

echo $breakNewline;

/**
 * strip_tags
 */
$string = "<h1>Hello world!</h1>";
echo strip_tags($string);

echo $breakNewline;

/**
 * chunk_split
 */
$string = "Hello World";
echo chunk_split($string, 2);

echo $breakNewline;

/**
 * substr
 */
$string = "Hello World";
echo substr($string, 6);