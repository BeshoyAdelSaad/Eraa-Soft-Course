<?php

/**
 * (1) (i) Pattern modifiers
 */
echo "<h3>(1) (i) Pattern modifiers</h3>";
$pattern = "/php/i";
$text = "I love php";  
$text = "I love PHP";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}