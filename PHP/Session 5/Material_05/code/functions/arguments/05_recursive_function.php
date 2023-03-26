<?php

function recursive(int $a)
{
    if($a <= 20) {

        echo "\$a = $a";
        echo "<br>";
        recursive(++$a);

    }
}


recursive(1);