<?php 
    function mySentence() 
    {
        echo "<h1>My name is Besho, And I am 31 years old</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        define("GLOBAL_VAR","Hello Worled");

        function test()
        {
            echo GLOBAL_VAR;
        }

        test();
    ?>


   
</body>
</html>