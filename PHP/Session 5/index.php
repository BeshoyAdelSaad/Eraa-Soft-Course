<?php 
$rundom = "";
$result = "";

function getrundom()
{
    $arr_op = ['+', '-', '/', '*', '%'];
    $n1_rnd = rand(1, 100);
    $n2_rnd = rand(1, 100);
    $op_rnd = rand(0, 4);
    return rundom_calculator($n1_rnd, $n2_rnd, $arr_op[$op_rnd]);
}

function rundom_calculator($num1, $num2, $operator)
{
    switch($operator)
    {
        case '+':
            $total =  $num1 + $num2;
            break;
        case '-':
            $total =  $num1 - $num2;
            break;
        case '/':
            $total =  $num1 / $num2;
            break;
        case '*':
            $total =  $num1 * $num2;
            break;
        case '%':
            $total =  $num1 % $num2;
            break;
    }   
    return "<h2>First number: $num1</h2>
    <h2>Second number: $num2</h2>
    <h2>The operator: ( $operator )</h2>
    <h2>The result: $num1$operator$num2 = $total</h2>";
}



function calculator($num1, $num2, $operator)
{
    switch($operator)
    {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '/':
            return $num1 / $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
        case '%':
            return $num1 % $num2;
            break;
    }   
}
if(isset($_POST['submit']))
    {
        $code = calculator($_POST['num1'], $_POST['num2'], $_POST['operator']);

        $result = "<button class='btn w-50  btn-primary mt-4' >$code</button>";

    }elseif (isset($_POST['rundom'])){$rundom = getrundom();}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../mainFiles/css/all.min.css">
    <link rel="stylesheet" href="../../mainFiles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mainFiles/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../mainFiles/css/mycss.css">
    <title>Session 5</title>
</head>
<body>

    <div class="container my-5 rounded border border-primary bg-light p-4" >
        <h1 class="text-center underline">Assignment</h1>
        <h2>1. Make a function to simulate a calculator with basic operations
    ( + , - , * , /,%) – function take three parameters</h2>

    <hr>
    <div class="row">
        <div class="col">
            <h2 class="p-3">Try to choose the two numbers and operator and see the result</h2>

            <form method="post">
                <label class="w-100 p-1 mb-2" for="num1">First Number</label>
                <input class="rounded w-100 p-1 mb-2" type="number" name="num1">
                <label class="w-100 p-1 mb-2" for="num2">Second Number</label>
                <input class="rounded w-100 p-1 mb-2" type="number" name="num2">
                <select class="form-select w-100 p-1 mb-2" name= "operator">
                    <option selected>Choose operator</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
                <div class="w-100 p-3 text-center">
                    <input type="submit" name="submit" class="btn w-50 btn-outline-primary mt-4" value="Result">
                    <div><?php echo $result;?></div>
                </div>
               
            </form>

        </div>
        <div class="col">
            <h2>See the result based on the dynamic numbers</h2>
            <form action="" method="post" class="text-center">
                <button type="submit" name="rundom" class="btn w-50 btn-primary">Get rundom</button>
            </form>
            <div><?php echo $rundom;?></div>
        </div>
    </div>

    </div>

    <div class="container my-5 rounded border border-primary bg-light p-4" >
    <h2>2. Write a PHP program to find factorial of a number using recursive function.</h2>
    </div>


    <?php ?>
    
</body>
</html>