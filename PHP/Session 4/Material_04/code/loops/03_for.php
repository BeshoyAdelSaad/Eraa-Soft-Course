<?php

// for($counter = 0; $counter <= 10; ++$counter) {

//     echo "The counter equal to : " . $counter;
//     echo '<br>';
// }


for($i = 0; $i <= 5; $i++) {

    echo "<h3>I'm in the first for loop scope</h3>";
    echo "The \$i value is $i";
    echo '<br>';

    return;

    for($x = 0; $x <= $i; $x++) {

        echo "<h3>I'm in the second for loop scope</h3>";
        echo "The \$x value is $x";
        echo '<br>';
    }
}
