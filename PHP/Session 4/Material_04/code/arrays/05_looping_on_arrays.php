<?php


$a = ['omar', 'mohamed', 'abdo', 'besho', 'alaa', 'mo3az'];

// echo "<h3>Loop on array not dynamically</h3>";
// for($i = 0; $i <= 2; $i++) {

//     echo $a[$i];
//     echo '<br>';
// }

echo "<h3>Loop on array dynamically</h3>";
for($i = 0; $i < count($a); $i++) {

    echo $a[$i];
    echo '<br>';
}