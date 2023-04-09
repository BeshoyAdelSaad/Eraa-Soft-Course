<?php

/**
 * (1) (+) Repetition Quantifier (one or more)
 */
echo "<h3>(1) (+) Repetition Quantifier (one or more)</h3>";
$pattern = "/e+/";
$text = "Find one or more e characters in this string";
$text = "bird";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (2) (*) Repetition Quantifier (zero or more)
 */
echo "<h3>(2) (*) Repetition Quantifier (zero or more)</h3>";
$pattern = "/e*/";
$text = "Find one or more e characters in this string";
$text = "bird";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (3) {x} Specific Quantifier
 */
echo "<h3>(3) {x} Specific Quantifier</h3>";
$pattern = "/e{2}/";
$text = "Find one or more e characters in this string";
$text = "test double e characters ee";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (4) {x, y} Specific Quantifier
 */
echo "<h3>(4) {x, y} Specific Quantifier</h3>";
$pattern = "/e{2,4}/";
$text = "Find one or more e characters in this string";
$text = "test multiple e character eeeeee";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (5) {x,} Specific Quantifier
 */
echo "<h3>(4) {x,} Specific Quantifier</h3>";
$pattern = "/e{2,}/";
$text = "Find one or more e characters in this string";     // doesn't match
$text = "test multiple e character eeeeee";                 // match
$text = "test multiple e character eeeeeeeeeeeee";                 // match

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}