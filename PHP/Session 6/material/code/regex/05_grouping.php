<?php

/**
 * (1) Grouping
 */
echo "<h3>(1) Grouping</h3>";
$pattern = "/di(n){2}er/";
$text = "here is your dinner";  
// $text = "here is your breakfast";  

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}