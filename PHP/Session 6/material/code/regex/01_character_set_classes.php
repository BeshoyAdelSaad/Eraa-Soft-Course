<?php

/**
 * (1) Character set without range
 */
echo "<h3>(1) Character set without range</h3>";
$pattern = "/[abc]/";
$text = "green a";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (2) Negated character set
 */
echo "<h3>(2) Negated character set</h3>";
$pattern = "/[^abc]/";

$text = "green";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (3) Ranged character from a-z
 */
echo "<h3>(3) Ranged character from a-z</h3>";
$pattern = "/[a-z]/";
$text = "green";
$text = "23";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (4) Ranged character from a-z and 0-9
 */
echo "<h3>(4) Ranged character from a-z and 0-9</h3>";
$pattern = "/[a-z0-9]/";
$text = "green";
$text = "23";
$text = "\$";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}