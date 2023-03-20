<?php

/**
 * Default break
 */
for($i = 0; $i <= 5; $i++) {

    echo "the value is $i"; 
    echo "<br>";

    if($i == 3) break;
}

/**
 * Break with value
 */
for($i = 0; $i <= 5; $i++) {

    echo "<h3>I'm in the first for loop scope</h3>";
    echo "The \$i value is $i";
    echo '<br>';

    for($x = 0; $x <= $i; $x++) {

        // Eman's solution
        // if($x == 2 ) {
        //     $i = 6;
        //     break;
        // }

        echo "<h3>I'm in the second for loop scope</h3>";
        echo "The \$x value is $x";
        echo '<br>';

        if($x == 2) break 2;
    }
}