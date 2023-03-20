<?php

$color = array("Blue", "Red", "Black", "Green", "Gray", "White");

echo '<h2>$color = array("Blue", "Red", "Black", "Green", "Gray", "White");</h2>';
echo "<h1>1. Write a script to print the second value in this array?</h1>";
echo "<h2>The answer:</h2>";
echo $color[1];
echo "<hr>";

echo "<h1>2. Write a PHP built-in function to remove the first value in the array?</h1>";
echo "<h2>The answer:</h2>";
array_shift($color);
print_r($color);
echo "<hr>";

echo "<h1>3. Write a script to add [‘blue’. ‘yellow’, ‘black’] to the array?</h1>";
echo "<h2>The answer:</h2>";
array_push($color,'blue', 'yellow', 'black');
print_r($color);
echo "<hr>";

echo "<h1>4. Write a PHP script to sort the array</h1>";
echo "<h2>The answer:</h2>";
sort($color);
print_r($color);
echo "<hr>";

echo "<h1>5. Write a script to display the array in ul list</h1>";
echo "<h2>The answer:</h2>";
$color = array("Blue", "Red", "Black", "Green", "Gray", "White");

echo "<ol type='a'>";
for ($i=0; $i < 4; $i++) {
    if($i == 0 || $i == 1)
    {
        echo "<li>" . strtolower($color[$i]) . "</li>" ;
        continue;
    } 
echo "<li>$color[$i]</li>";    
}
echo "</ol>";
echo "<hr>";

$arr = [ 
    'name' => 'john deo', 
    'age' => 25, 
    'job' => 'backend developer',
    'hobbies' => ['reading', 'coding', 'gym']
    ];

echo <<<'text'
    <h3>$arr = [ <br>
    'name' => 'john deo', <br>
    'age' => 25, <br>
    'job' => 'backend developer', <br>
    'hobbies' => ['reading', 'coding', 'gym'] <br>
    ];</h3> <br>
    text;
    echo "<h1>6. Write a script to print only the keys in this array and save it in a new variable
and another to save only the values and save it in another variable?</h1>";
echo "<h2>The answer:</h2>";
$arr_keys = (array_keys($arr));
$arr_values = (array_values($arr));
echo "<br>";
echo 'array keys';
echo "<br>";
print_r($arr_keys);
echo "<br>";
echo 'array value';
echo "<br>";
print_r($arr_values);
echo "<hr>";

echo "<h1>7. Write a script to print all the keys in uppercase?</h1>";
echo "<h2>The answer:</h2>";
print_r(array_change_key_case($arr,CASE_UPPER));
echo "<hr>";

echo "<h1>8. Write a script to print a random hoppy?</h1>";
echo "<h2>The answer:</h2>";
shuffle($arr['hobbies']);
echo "<pre>";
print_r($arr['hobbies']);
echo "</pre>";
echo "<hr>";

echo "<h1>9. Write a PHP script to sort an array in reverse order based on the key?</h1>";
echo "<h2>The answer:</h2>";
rsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<hr>";

echo "<h1>10. Write a script to print the key : and the value like this:</h1>";
echo <<<'t'
        name : john deo <br>
        age : 25 <br>
        job : backend developer <br>
        Hobbies : <br>
        ● reading <br>
        ● coding <br>
        ● gym <br>
        t;
        $arr = [ 
            'name' => 'john deo', 
            'age' => 25, 
            'job' => 'backend developer',
            'hobbies' => ['reading', 'coding', 'gym']
            ];
echo "<h2>The answer:</h2>";
foreach ($arr as $key => $value) 
{ 
    if(is_array($arr[$key]))
    {
        echo ucfirst($key). " :";
        echo "<br>";
        foreach($arr[$key] as $val)
        {
            echo "● " . $val . "<br>";
        }
        continue;
    }
    
    echo $key . " : " . $value . "<br>";
}
echo "<hr>";

echo "<h1>11. Write a script to print a 20 number using for loop and save it in array?</h1>";
echo "<h2>The answer:</h2>";
$newArr;
for($i = 1; $i <= 20; $i++)
{
    $newArr [] = $i;
}
echo "<pre>";
print_r($newArr);
echo "</pre>";
echo "<hr>";

echo "<h1>12. Write a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be
no hyphen(-) at starting and ending position?</h1>";
echo "<h2>The answer:</h2>";
for($i = 1; $i <= 10; $i++)
{
    if($i != 10)
    {
        echo $i . "-";
        continue;
    }
    echo $i;
}
echo "<hr>";

echo "<h1>13. Write a script using a for loop to add all the integers between 0 and 10 and
display the sum?</h1>";
echo "<h2>The answer:</h2>";
$r;
for($i = 0; $i <= 10; $i++)
{
    $r [] = $i;
}
echo "<pre>";
print_r($r);
echo "</pre>";
echo "The sum of the integers above is: " . array_sum($r);
echo "<hr>";

echo "['one', 'two', 'three', 'four', 'five']";
echo "<h1>14. Write a script to print all the values in the array except value ‘three’?</h1>";
echo "<h2>The answer:</h2>";
$q14 = ['one', 'two', 'three', 'four', 'five'];
for ($i=0; $i < count($q14); $i++) { 
    if($q14[$i] == 'three') continue;
    echo $q14[$i] . "<br>";
}
echo "<hr>";
echo "<h1>15. Write a script to print all the values and stop after value ‘four’?</h1>";
echo "<h2>The answer:</h2>";
$q15 = ['one', 'two', 'three', 'four', 'five'];
for ($i=0; $i < count($q15); $i++) { 
    echo $q15[$i] . "<br>";
    if($q15[$i] == 'four') break;
}
echo "<hr>";

$str = "It is a long established fact that abc a reader will be distracted by the
readable content of a page when abc looking at its layout. The point of using
Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
opposed to using abc 'Content here, content here', making it look like readable
English. Many desktop publishing packages and web page editors abc now use
Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will abc
uncover many web abc sites still in their infancy. Various versions abc have
evolved over abc the years, sometimes by accident, sometimes abc on purpose
(injected humour and the like).";

echo "\$str = \"" . $str . "\"";


echo "<h1>16. Write a script to print the second value in this array?</h1>";
echo "<h2>The answer:</h2>";

$newSTR = "";
echo "<br>";

for($i = 0; $i < strlen($str); $i++)
{
    if(
        ($str[$i] == "a" && $str[$i+1] == "b" && $str[$i+2] == "c") ||
        ($str[$i] == "b" && $str[$i-1] == "a" && $str[$i+1] == "c") ||
        ($str[$i] == "c" && $str[$i-1] == "b" && $str[$i-2] == "a")
    )
    {
        continue;
    }else
    {
        $newSTR .= $str[$i];
    }
}

echo $newSTR;
echo "<hr>";












