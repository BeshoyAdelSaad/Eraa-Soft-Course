<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../mainFiles/css/all.min.css">
    <link rel="stylesheet" href="../../mainFiles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mainFiles/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../mainFiles/css/mycss.css">
</head>
<body>
    <div class="container bg-light border rounded my-5 p-4">
        <div class="row">
            <div class="col-12">
                <h2>
                1- Write a PHP script that records 3 digits and prints the total of the first two digits multiplied by the third digit:
                </h2>
            </div>

            <hr>
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>

                    <div class="col-7">
                    <pre>
                    <code>
                        &lt;?php 
                            function sum()
                            {
                                $num1 = 5;
                                $num2 = 6;
                                $num3 = 2;
                                $total = ($num1 + $num2) * $num3;
                                echo $total;
                            }
                            sum();
                        ?&gt;
                    </code>
                </pre>
                    </div>

                    <div class="col-3 mt-5">
                        <h2 class="">The result : (            
                            <?php 
                                function sum()
                                {
                                    $num1 = 5;
                                    $num2 = 6;
                                    $num3 = 2;
                                    $total = ($num1 + $num2) * $num3;
                                    echo $total;
                                }
                                sum();
                            ?>)
                    </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light border rounded p-4 my-5">
        <div class="row">
            <div class="col-12">
                <h2>
                    2- A program that calculates the size of a box whose length and width are fixed with avalue of 5 and 10 and the height is variable (size = length x width x height):
                </h2>
            </div>
            <hr>
            <div class="container text-bg-dark rounded">
            <div class="row">
                <div class="col-2 mt-5">
                    <h3>The answer:</h3>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                function sizeBox($height)
                                {
                                    define("LINGTH", 5);
                                    define("WIDTH", 10);
                                    $size = $height * LINGTH * WIDTH; 
                                    echo $size;
                                }
                                sizeBox(10);
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            function sizeBox($height)
                            {
                                define("LINGTH", 5);
                                define("WIDTH", 10);
                                $size = $height * LINGTH * WIDTH; 
                                echo $size;
                            }
                            sizeBox(10);
                        ?> )
                    </h3>
                </div>

            </div>

            </div>
        </div>
    </div>
    
    <div class="container bg-light border rounded p-4 my-5">
        <div class="row">
            <div class="col-12">
                <h2>
                3- Write a PHP script that takes a number integer representing the hours and converts it to seconds:
                </h2>
            </div>
            <hr>
            <div class="container text-bg-dark rounded">
            <div class="row">
                <div class="col-2 mt-5">
                    <h3>The answer:</h3>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                function totalSecond($hours)
                                {
                                    define("SECOND", 60);
                                    $total = $hours * SECOND; 
                                    echo $total;
                                }
                                totalSecond(10);
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            function totalSecond($hours)
                            {
                                define("SECOND", 60);
                                 $total = $hours * SECOND; 
                                 echo $total;
                            }
                            totalSecond(10);
                        ?> )
                    </h3>
                </div>

            </div>

            </div>
        </div>
    </div>

    <div class="container bg-light border rounded p-4 my-5">
        <div class="row">
            <div class="col-12">
                <h2>
                    4- Write a PHP script that calculates the Area of a Triangle store the base and height Print the area:
                </h2>
            </div>
            <hr>
            <div class="container text-bg-dark rounded">
            <div class="row">
                <div class="col-2 mt-5">
                    <h3>The answer:</h3>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                function areaOfTriangle($base, $height)
                                {
                                    $areaOfTriangle = $base / 2 * $height; 
                                    echo $areaOfTriangle; 
                                }
                                areaOfTriangle(10, 15);
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            function areaOfTriangle($base, $height)
                            {
                                $areaOfTriangle = $base / 2 * $height; 
                                echo $areaOfTriangle; 
                            }
                            areaOfTriangle(10, 15);
                        ?> )
                    </h3>
                </div>

            </div>

            </div>
        </div>
    </div>
    
    <div class="container bg-light border rounded p-4 my-5">
        <div class="row">
            <div class="col-12">
                <h2>
                5- Write a PHP script that takes the age in years and prints the age in days:
                </h2>
            </div>
            <hr>
            <div class="container text-bg-dark rounded">
            <div class="row">
                <div class="col-2 mt-5">
                    <h3>The answer:</h3>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                function ageInDays($age)
                                {
                                    $daysInYear = 365.25;
                                    $ageInDays = $age * $daysInYear;
                                    echo $ageInDays; 
                                }
                                ageInDays(31);
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            function ageInDays($age)
                            {
                                $daysInYear = 365.25;
                                $ageInDays = $age * $daysInYear;
                                echo $ageInDays; 
                            }
                            ageInDays(31);
                        ?> )
                    </h3>
                </div>

            </div>

            </div>
        </div>
    </div>

    <div class="container bg-light border rounded p-4 my-5">
        <div class="row">
            <div class="text-center col-12">
                <h1 class="text-bg-primary rounded p-3">
                    EraaSoft Learn by practice
                </h1>
                <hr>
                <h2>
                    6- Get the length of this sentence:
                </h2>

            </div>
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    function showLenStr()
                                    {
                                        $string = "EraaSoft Learn by practice";
                                        $length = strlen($string);
                                        echo $length;
                                    }
                                    showLenStr();
                                ?&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                function showLenStr()
                                {
                                    $string = "EraaSoft Learn by practice";
                                    $length = strlen($string);
                                    echo $length;
                                }
                                showLenStr();
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
                <div class="text-center col-12">
                    <h2>
                        7- Get the length of this sentence without spaces:
                    </h2>
                    <hr>
                </div>
                <div class="container text-bg-dark rounded">
                    <div class="row">
                        <div class="col-2 mt-5">
                            <h3>The answer:</h3>
                        </div>
            
                        <div class="col-7">
                            <pre>
                                <code>
                                    &lt;?php 
                                        function withoutSpace()
                                        {
                                            $string = "EraaSoft Learn by practice";
                                            $noSpace = str_replace(" ", "", $string);
                                            $length = strlen($noSpace);
                                            echo $length;
                                        }
                                        withoutSpace();
                                    ?&gt;
                                </code>
                            </pre>
                        </div>
                        <div class="col-3 mt-5">
                            <h3 class="">The result : (
                                <?php 
                                    function withoutSpace()
                                    {
                                        $string = "EraaSoft Learn by practice";
                                        $noSpace = str_replace(" ", "", $string);
                                        $length = strlen($noSpace);
                                        echo $length;
                                    }
                                    withoutSpace();
                                ?> )
                            </h3>
                        </div>

                    </div>
                </div>
                <div class="row mt-3">
                        <div class="text-center col-12">
                            <h2>
                                8- Get the number of words in this sentence:
                            </h2>
                            <hr>
                        </div>
                </div>
                <div class="container text-bg-dark rounded">
                    <div class="row">
                        <div class="col-2 mt-5">
                            <h3>The answer:</h3>
                        </div>
            
                        <div class="col-7">
                            <pre>
                                <code>
                                    &lt;?php 
                                        function countWords()
                                        {
                                            $string = "EraaSoft Learn by practice";
                                            $countWords = str_word_count($string);
                                            echo $countWords;
                                        }
                                        countWords();
                                    ?&gt;
                                </code>
                            </pre>
                        </div>
            
                        <div class="col-3 mt-5">
                            <h3 class="">The result : (
                                <?php 
                                    function countWords()
                                    {
                                        $string = "EraaSoft Learn by practice";
                                        $countWords = str_word_count($string);
                                        echo $countWords;
                                    }
                                    countWords();
                                ?> )
                            </h3>
                        </div>

                    </div>
                    </div>
                <div class="row mt-3">
                        <div class="text-center col-12">
                            <h2>
                                9- Check if this word (by) exists in the string or not:
                            </h2>
                            <hr>
                        </div>
                </div>
                <div class="container text-bg-dark rounded">
                    <div class="row">
                        <div class="col-2 mt-5">
                            <h3>The answer:</h3>
                        </div>
            
                        <div class="col-7">
                            <pre>
                                <code>
                                    &lt;?php 
                                        function checkStr()
                                        {
                                            $string = "EraaSoft Learn by practice";
                                            $check = str_contains($string,"by");
                                            echo $check;
                                        }
                                        checkStr();
                                    ?&gt;
                                </code>
                            </pre>
                        </div>
            
                        <div class="col-3 mt-5">
                            <h3 class="">The result : (
                                <?php 
                                    function checkStr()
                                    {
                                        $string = "EraaSoft Learn by practice";
                                        $check = str_contains($string,"by");
                                        echo $check;
                                    }
                                    checkStr();
                                ?> )
                            </h3>
                        </div>

                    </div>
                    </div>
                <div class="row mt-3">
                        <div class="text-center col-12">
                            <h2>
                                10- Get the word (EraaSoft) from the string and print it.
                            </h2>
                            <hr>
                        </div>
                </div>
                <div class="container text-bg-dark rounded">
                    <div class="row">
                        <div class="col-2 mt-5">
                            <h3>The answer:</h3>
                        </div>
            
                        <div class="col-7">
                            <pre>
                                <code>
                                    &lt;?php 
                                        function findText()
                                        {
                                            $string = "EraaSoft Learn by practice";
                                            $lenghtString = strlen($string);
                                            $lenghtEraa = strlen("EraaSoft");
                                            $EraaSoft = substr($string, 0, $lenghtEraa - $lenghtString,);
                                            echo $EraaSoft;
                                        }
                                        findText();
                                    ?&gt;
                                </code>
                            </pre>
                        </div>
            
                        <div class="col-3 mt-5">
                            <h3 class="">The result : (
                                <?php 
                                    function findText()
                                    {
                                        $string = "EraaSoft Learn by practice";
                                        $lenghtString = strlen($string);
                                        $lenghtEraa = strlen("EraaSoft");
                                        $EraaSoft = substr($string, 0, $lenghtEraa - $lenghtString,);
                                        echo $EraaSoft;
                                    }
                                    findText();
                                ?> )
                            </h3>
                        </div>

                    </div>
                    </div>        
                <div class="row mt-3">
                        <div class="text-center col-12">
                            <h2>
                                11- Remove the word (by) from the string and print the string with and without (by):
                            </h2>
                            <hr>
                        </div>
                </div>
                <div class="container text-bg-dark rounded">
                    <div class="row">
                        <div class="col-2 mt-5">
                            <h3>The answer:</h3>
                        </div>
            
                        <div class="col-7">
                            <pre>
                                <code>
                                    &lt;?php 
                                        function replaceStr()
                                        {
                                            $string = "EraaSoft Learn by practice";
                                            $strReplace = str_replace("by", "and", $string);
                                            echo $strReplace;
                                        }    
                                        replaceStr();   
                                    ?&gt;
                                </code>
                            </pre>
                        </div>
            
                        <div class="col-3 mt-5">
                            <h3 class="">The result : 
                                <br>
                                (
                                <?php 
                                    function replaceStr()
                                    {
                                        $string = "EraaSoft Learn by practice";
                                        $strReplace = str_replace("by", "and", $string);
                                        echo $strReplace;
                                    }    
                                    replaceStr();                        
                                ?> )
                            </h3>
                        </div>

                    </div>
                    </div>
        </div>
    </div>
    
    <div class="container bg-light border rounded p-4 my-5">
        <div class="row p-3">
            <div class="text-center col-12">
                <h1 class="text-bg-primary rounded p-3">
                    $string_one = "Eraa",
                    $string_two = "Soft";
                </h1>
                <hr>
                <h2>
                    12- Make a new variable called (Full_string) that concatenate string_one and string_two:
                </h2>
            </div>
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    $string_one = "Eraa";
                                    $string_two = "Soft";
                                    $full_sting = $string_one . $string;
                                    echo $full_sting;
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                $string_one = "Eraa";
                                $string_two = "Soft";
                                $full_string = $string_one . $string_two;
                                echo $full_string;
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row p-3">
            <div class="text-center col-12">
                <h2>
                    13- Compare the full_string and this string (EraaSoft).
                </h2>
            </div>
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    echo strcmp($full_sting, "EraaSoft");
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                echo strcmp($full_string, "EraaSoft");
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="text-center col-12">
                <h2>
                    14- Write a PHP script to split the following string.
                <br>
                    Sample string: 'ErraSoft'
                <br>
                    Expected Output: Er/ra/So/ft
                </h2>  
            </div>
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                var_dump(str_split("ErraSoft", 2));
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result :
                            (
                            <?php 
                                print_r(str_split("ErraSoft", 2));
                            ?> 
                            )
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="text-center col-12">
                <h2>
                    15- Write a PHP script that stores the number as a variable and checks if it is odd oreven.
                </h2>
            </div>
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    function checkNum($num)
                                    {
                                        if (!is_numeric($num))
                                        {
                                            echo "Please enter a valid number";
                                        }elseif(($num % 2) == 0) 
                                        {
                                            echo "The number is even";
                                        }elseif (($num % 2) == 1 || ($num % 2) == -1)
                                        {
                                            echo "The number is odd";
                                        }
                                    }
                                    checkNum(4);
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                function checkNum($num)
                                {
                                    if (!is_numeric($num))
                                    {
                                        echo "Please enter a valid number";
                                    }elseif(($num % 2) == 0) 
                                    {
                                        echo "The number is even";
                                    }elseif (($num % 2) == 1 || ($num % 2) == -1)
                                    {
                                        echo "The number is odd";
                                    }
                                }
                                checkNum(4);
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="text-center col-12">
                <h2>
                    16- Write a PHP script that stores the string as a variable and checks if it is odd or even.
                </h2>
            </div>
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    function checkLenStr($string)
                                    {
                                        $str = strlen($string);
                                        if (!is_string($string) || is_numeric($string))
                                        {
                                            echo "Please enter a valid string";
                                        }
                                        elseif(($str % 2) == 0) 
                                            {
                                                echo "The length of string is even";
                                            }elseif (($str % 2) == 1 || ($str % 2) == -1)
                                            {
                                                echo "The length of string is odd";
                                            }
                                    }
                                    checkLenStr("Besho"); 
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                 function checkLenStr($string)
                                 {
                                     $str = strlen($string);
                                     if (!is_string($string) || is_numeric($string))
                                     {
                                         echo "Please enter a valid string";
                                     }
                                     elseif(($str % 2) == 0) 
                                         {
                                             echo "The length of string is even";
                                         }elseif (($str % 2) == 1 || ($str % 2) == -1)
                                         {
                                             echo "The length of string is odd";
                                         }
                                }
                                checkLenStr("Besho"); 
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light border rounded p-4 my-5">
        <div class="row p-3">
            <div class="text-center col-12">
                <h1 class="text-bg-primary rounded p-3">
                    $description = "no pain , no gain ";
                </h1>
                <hr>
                <h2>
                    17- Check from this string o If the string has “gain” Print ( success word ) o If the string has (peen ) Print ( success word ) Else ( wrong word )
                </h2>
            </div> 
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    $description = "no pain , no gain ";
                                    if(str_contains($description, "gain") 
                                        || str_contains($description, "peen"))
                                    {
                                        echo "Success word";
                                    }else
                                    {
                                        echo "Worng word";
                                    }
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                $description = "no pain , no gain ";
                                if(str_contains($description, "gain") 
                                    || str_contains($description, "peen"))
                                {
                                    echo "Success word";
                                }else
                                {
                                    echo "Worng word";
                                }
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row p-3">
            <div class="text-center col-12">
                <h2>
                    18- A Boolean is a data type that has only two values true or false. These values often correspond to 1 (true) or 0 (false).When a 1 or a 0 is used, it's called an int Boolean.
                    <br>
                    Write a PHP script that stores an int Boolean and outputs its opposite
                    <br>
                    (1 becomes 0 and 0 becomes 1).                     
                </h2>
            </div> 
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    echo (4 > 2);
                                    echo (2 > 4);
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                echo (4 > 2);
                                echo (2 > 4);
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row p-3">
            <div class="text-center col-12">
                <h2>
                19- Write a PHP script that stores a word and determines Is the Word is Singular or Plural?
                <br>
                (A plural word is one that ends in "s".)                     
                </h2>
            </div> 
            <div class="container text-bg-dark rounded">
                <div class="row">
                    <div class="col-2 mt-5">
                        <h3>The answer:</h3>
                    </div>
        
                    <div class="col-7">
                        <pre>
                            <code>
                                &lt;?php 
                                    function checkPlural($text)
                                    {
                                        $posChar = strlen($text) -1;

                                        if($text[$posChar] == "s")
                                        {
                                            echo "The mention word is plural";
                                        }else
                                        {
                                            echo "The mention word is singular";
                                        }
                                    }
                                    checkPlural("Books");
                                ?&gt;
                            </code>
                        </pre>
                    </div>
        
                    <div class="col-3 mt-5">
                        <h3 class="">The result : (
                            <?php 
                                function checkPlural($text)
                                {
                                    $posChar = strlen($text) -1;

                                    if($text[$posChar] == "s")
                                    {
                                        echo "The mention word is plural";
                                    }else
                                    {
                                        echo "The mention word is singular";
                                    }
                                }
                                checkPlural("Books");
                            ?> )
                        </h3>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="row p-3">
            <div class="col-12">
                <h2>
                20- Make a calculator with these operations using if and else if                   
                </h2>
                <ul>
                    <li>Submission</li>
                    <li>Subtraction</li>
                    <li>Multiplication</li>
                    <li>Division</li>
                    <li>Power</li>
                    <li>Modulus</li>
                </ul>
            </div> 
             <!-- caculater -->
    <?php 
        $result = "";
        class calculator
        {
            var $a;
            var $b;

            function checkopration($oprator)
            {
                switch($oprator)
                {
                    case '+':
                    return $this->a + $this->b;
                    break;

                    case '-':
                    return $this->a - $this->b;
                    break;

                    case '*':
                    return $this->a * $this->b;
                    break;

                    case '**':
                    return $this->a ** $this->b;
                    break;

                    case '/':
                    return $this->a / $this->b;
                    break;

                    case '%':
                    return $this->a % $this->b;
                    break;

                    default:
                    return "Sorry No command found";
                }   
            }
            function getresult($a, $b, $c)
            {
                $this->a = $a;
                $this->b = $b;
                return $this->checkopration($c);
            }
        }

        $cal = new calculator();
        if(isset($_POST['submit']))
        {   
            $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
        }
        ?>

    <div class="container p-4 w-50">
        <form method="post">
        <table class="table table-dark table-striped">
            <tr>
                <td>The result:</td>
                <td><strong><?php echo $result; ?><strong></td>
            </tr>
            <tr>
                <td>Enter 1st Number</td>
                <td><input type="text" name="n1"></td>
            </tr>

            <tr>
                <td>Enter 2nd Number</td>
                <td><input type="text" name="n2"></td>
            </tr>

            <tr>
                <td>Select Oprator</td>
                <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                    <option value="**">**</option>
                </select></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value=" = "></td>
            </tr>

        </table>
        </form>
    </div>
    <!-- caculater -->

        </div>
    </div>

   
<script src="../../mainFiles/js/all.min.js"></script>    
<script src="../../mainFiles/js/bootstrap.bundle.min.js"></script>    
<script src="../../mainFiles/js/bootstrap.bundle.min.js.map"></script>    
</body>
</html>


