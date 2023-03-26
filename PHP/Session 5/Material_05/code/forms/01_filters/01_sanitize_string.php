<?php

$string = "<h1>String inside html h1 element</h1>";

$sanitizedString = filter_var($string, FILTER_SANITIZE_STRING);

ECHO $string;