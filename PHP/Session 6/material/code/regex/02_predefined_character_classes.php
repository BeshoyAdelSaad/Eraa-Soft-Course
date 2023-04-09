<?php

/**
 * (1) (dot) predefined character
 */
echo "<h3>(1) (dot) predefined character</h3>";
$pattern = "/./";
$text = "green";
$text = "24";
$text = "\n";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (2) (\d) Matching digital characters
 */
echo "<h3>(2) (\d) Matching digital characters</h3>";
$pattern = "/\d/";  // equal to 0-9
$text = "green";
$text = "24";
// $text = "\n";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}