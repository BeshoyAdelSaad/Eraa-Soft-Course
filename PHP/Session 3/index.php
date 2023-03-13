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
                        <h2 class="">Example:</h2>
                    </div>

                    <div class="col-7">
                    <pre>
                    <code>
                        &lt;?php 
                            $num1 = 5;
                            $num2 = 6;
                            $num3 = 2;
                            $total = ($num1 + $num2) * $num3;
                            echo $total;
                        ?&gt;
                    </code>
                </pre>
                    </div>

                    <div class="col-3 mt-5">
                        <h2 class="">The result : (            
                            <?php 
                                $num1 = 5;
                                $num2 = 6;
                                $num3 = 2;
                                $total = ($num1 + $num2) * $num3;
                                echo $total;
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                define("LINGTH", 5);
                                define("WIDTH", 10);
                                $height = null;
                                // I will set a default value for the height 
                                variable if no value is assigned for it
                                if ($height === null)
                                    {
                                        $height = 10;
                                    }
                                $size = $height * LINGTH * WIDTH; 
                                echo $size;
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            define("LINGTH", 5);
                            define("WIDTH", 10);
                            $height = null;
                            // I will set a default value for the height variable if no value is assigned for it
                            if ($height === null)
                                {
                                    $height = 10;
                                }
                            $size = $height * LINGTH * WIDTH; 
                            echo $size;
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                define("SECOND", 60);
                                $hours = null;
                                // Hours variable check
                                if (is_string($hours) == true)
                                {
                                echo "Please enter a valid number!";
                                } elseif (is_null($hours) == true)
                                    {
                                        $hours = 5;
                                    }
                                $total = $hours * SECOND; 
                                echo $total; 
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                           define("SECOND", 60);
                           $hours = null;
                           // Hours variable check
                           if (is_string($hours) == true)
                           {
                               echo "Please enter a valid number!";
                           } elseif (is_null($hours) == true)
                                {
                                    $hours = 5;
                                }
                            $total = $hours * SECOND; 
                            echo $total;
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                $base = null;
                                $height = null;
                                
                                // I will set a default value for the height 
                                and base variables if no value is assigned for it
                                
                                if ( $base == null && $height == null ) 
                                {
                                    $base = 10;
                                    $height = 15;
                                }
                                $areaOfTriangle = $base / 2 * $height; 
                                echo $areaOfTriangle; 
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            $base = null;
                            $height = null;
                              
                            // I will set a default value for the height and base variables if no value is assigned for it
                            
                            if ( $base == null && $height == null ) 
                            {
                                $base = 10;
                                $height = 15;
                            }
                            $areaOfTriangle = $base / 2 * $height; 
                            echo $areaOfTriangle; 
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 

                            $age = null;
                            // I will set a default value for the age 
                            variables if no value is assigned for it
                            
                            if ( $age == null) 
                            {
                                $age = 23;
                            }
                            $ageInDays = $age * 365.25;
                            echo $ageInDays; 
                            
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            $age = null;
                            
                            // I will set a default value for the age variables if no value is assigned for it
                            
                            if ( $age == null) 
                            {
                                $age = 23;
                            }
                            $ageInDays = $age * 365.25;
                            echo $ageInDays; 
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
                <h1>
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                            $string = "EraaSoft Learn by practice";
                            $length = strlen($string);
                            echo $length;
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            $string = "EraaSoft Learn by practice";
                            $length = strlen($string);
                            echo $length;
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
        </div>
        <div class="container text-bg-dark rounded">
            <div class="row">
                <div class="col-2 mt-5">
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                $string = "EraaSoft Learn by practice";
                                $noSpace = str_replace(" ", "", $string);
                                $length = strlen($noSpace);
                                echo $length;
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            $string = "EraaSoft Learn by practice";
                            $noSpace = str_replace(" ", "", $string);
                            $length = strlen($noSpace);
                            echo $length;
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                $string = "EraaSoft Learn by practice";
                                $countWords = str_word_count($string);
                                echo $countWords;
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            $string = "EraaSoft Learn by practice";
                            $countWords = str_word_count($string);
                            echo $countWords;
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                $string = "EraaSoft Learn by practice";
                                $check = str_contains($string,"by");
                                echo $check;
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            $string = "EraaSoft Learn by practice";
                            $check = str_contains($string,"by");
                            echo $check;
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                $string = "EraaSoft Learn by practice";
                                $lenghtString = strlen($string);
                                $lenghtEraa = strlen("EraaSoft");

                                $EraaSoft = substr($string,$lenghtEraa - $lenghtString);
                                echo $EraaSoft;
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : (
                        <?php 
                            $string = "EraaSoft Learn by practice";
                            $lenghtString = strlen($string);
                            $lenghtEraa = strlen("EraaSoft");

                            $EraaSoft = substr($string, 0, $lenghtEraa - $lenghtString,);
                            echo $EraaSoft;
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
                    <h2 class="">Example:</h2>
                </div>
    
                <div class="col-7">
                    <pre>
                        <code>
                            &lt;?php 
                                $string = "EraaSoft Learn by practice";
                                $strReplace = str_replace("by", "and", $string);
                                echo $strReplace;
                            ?&gt;
                        </code>
                    </pre>
                </div>
    
                <div class="col-3 mt-5">
                    <h3 class="">The result : 
                        <br>
                        (
                        <?php 
                            $string = "EraaSoft Learn by practice";
                            $strReplace = str_replace("by", "and", $string);
                            echo $strReplace;
                        ?> )
                    </h3>
                </div>

            </div>
            </div>
        
        </div>



<script src="../../mainFiles/js/all.min.js"></script>    
<script src="../../mainFiles/js/bootstrap.bundle.min.js"></script>    
<script src="../../mainFiles/js/bootstrap.bundle.min.js.map"></script>    
</body>
</html>


