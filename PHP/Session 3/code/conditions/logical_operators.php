<?php

$a = 10;

$b = 20;

$c = 30;

// and &&
// or ||

if($c > $a && $c > $b && ($c > 25 && $b > $a)) {

    echo "c is the biggest";
}

if($c > $a || $a > $b) {
    echo "hello world";
}