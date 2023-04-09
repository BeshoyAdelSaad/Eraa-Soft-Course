<?php

/**
 * (1) Validate string is email using RegEx
 */
echo "<h3>(1) Validate string is email using RegEx</h3>";
$pattern = "/^[a-z0-9]+[_a-z0-9\.]*[a-z0-9]+@[a-z0-9]+\.[a-z]+([a-z]{2,4})*$/";
$text = "zakria@test.com";

if(preg_match($pattern, $text)) {
    echo "matches";
} else {
    echo "doesn't match";
}

/**
 * (2) Replace any Microsoft with Google
 */
echo "<h3>(2) Replace any Microsoft with Google</h3>";
$pattern = "/microsoft/i";
$text = "Microsoft is the world’s largest software maker. The company, founded by Bill Gates and Paul Allen in 1975, is best known for its software products, including Microsoft Windows operating systems, the Microsoft Office suite, and the Internet Explorer web browser. Microsoft is also known for its hardware products such as the Microsoft Surface touch screen personal computer and the Xbox series of video game consoles.";


$newText = preg_replace($pattern, "Google", $text);
echo $newText;