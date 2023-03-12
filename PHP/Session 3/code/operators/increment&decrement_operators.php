<?php

// ++$a;   // pre-increment
// $a++;   // post-increment

$a = 8;

echo "<h3>Post-Increment operator</h3>";

/**
 * Post-Increment operator
 */

echo "The result during post-increment: " . $a++;

echo "<br>";

echo "The result after the post-increment: " . $a;


echo "<h3>Pre-Increment operator</h3>";

$a = 8;
/**
 * Pre-Increment operator
 */

echo "The result during pre-increment: " . ++$a;

echo "<br>";

echo "The result after the pre-increment: " . $a;
