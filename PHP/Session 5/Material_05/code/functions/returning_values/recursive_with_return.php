<?php

function recursive(int $a)
{
    if($a > 20) return;

    echo "\$a = $a";
    echo "<br>";
    recursive(++$a);
    
}


recursive(1);