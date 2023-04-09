<?php

/**
 * (1) (^) Position anchor
 */
echo "<h3>(1) (^) Position anchor</h3>";
$pattern = "/^k/";
$text = "khaled";
$text = "ali";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (2) ($) Position anchor
 */
echo "<h3>(2) ($) Position anchor</h3>";
$pattern = "/d$/";
$text = "khaled";
$text = "ali";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (3) (^) and ($) Position anchors
 */
echo "<h3>(3) (^) and ($) Position anchors</h3>";
$pattern = "/^k+[a-z]*d$/";
$text = "khaled";
$text = "ali";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}