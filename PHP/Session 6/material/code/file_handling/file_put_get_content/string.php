<?php

$filePath = "string_in_file.txt";

// put string into file
file_put_contents($filePath, "I'm wrinting this string using file_put_content()");

// Read string from file
$string = file_get_contents($filePath);

echo $string;