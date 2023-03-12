<?php

$breakNewline = "<br> \n";

/**
 * Plush (addition)
 */
echo 4 + 4;

echo $breakNewline;

/**
 * Minus (subtraction)
 */
echo 10 -5;     // output: 5
echo 5 - 10;    // output: -5

echo $breakNewline;

/**
 * Multiplication
 */
echo 2*2;   // 4

/**
 * Division
 */
echo 10 / 5;    // 2

echo $breakNewline;

echo 12 % 5;

echo $breakNewline;

/**
 * Expo
 */
echo 2**3;

echo $breakNewline;

/**
 * Identity
 */
var_dump(-"5");

echo $breakNewline;
echo $breakNewline;
echo $breakNewline;
echo $breakNewline;


/**
 * Precedence of arithmetic operations
 */
echo (20 + 3) + 12 + 8 / 4 * 3;