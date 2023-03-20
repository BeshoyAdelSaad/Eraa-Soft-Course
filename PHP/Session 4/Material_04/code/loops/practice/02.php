<?php

echo "<h3>Q2 part 1</h3>";


for($i = 1; $i <= 5; $i++) {

    for($x = 1; $x <= $i; $x++) {
        echo "* ";
    }

    echo "<br>";
    
}

echo "<h3>Q2 part 2</h3>";


for($i = 1; $i <= 5; $i++) {

    for($x = 1; $x <= $i; $x++) {
        echo "*";
        
        if($x < $i) echo '-';
    }

    echo "<br>";
    
}