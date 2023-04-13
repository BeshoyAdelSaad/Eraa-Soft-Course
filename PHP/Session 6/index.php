<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 6</title>

    <link rel="stylesheet" href="../../mainFiles/css/all.min.css">
    <link rel="stylesheet" href="../../mainFiles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mainFiles/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../mainFiles/css/mycss.css">
</head>
<body style="background-color: #8a2be2cc;">
    <div class="container my-5 mb-3 bg-light shadow p-3 rounded">
        <h1 class="text-center">Session 6</h1>
    </div>
    <div class="container my-4 mt-3 p-3 colection">
        <div class="row">
            <button class="questions">Question 1</button>
            <div class="panel">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary w-100 p-3 my-3 qbtn" onclick="show(this)" id="qq1">See The Question</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qc1">See The Code</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qs1">See Solution</button>
                    </div>
                    <div id="sqq1" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                        1. Create a simple 'birthday countdown' script, the script will count the number of
                        days between current day and birthday.
                    </div>
                    <div id="sqc1" class="my-1 hide col-12 text-bg-dark rounded shadow">
<pre>
    <code>
    &lt;php&gt;
        function my_birth_in_days(int $year, string $month, int $day)
        {
            $my_birthday = strtotime($month . ' ' . $day . ' ' . $year);
            $days = floor((time() - $my_birthday) / 60/60/24);
            return "Days till next birthday: $days  days!"."\n";
        }

        function another_my_birth_in_days(int $year, int $month, int $day){
            $target_days = mktime(0,0,0,$month,$day,$year);
            $today = time();
            $diff_days = ( $today - $target_days);
            $days = (int)($diff_days/86400);
            return "Days till next birthday: $days days!"."\n";
        }

        my_birth_in_days(1992, 'September', 8);
        another_my_birth_in_days(1992, 9, 8);
        &lt;/php&gt;
    </code>
</pre>
                    </div>
                    <div id="sqs1" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                        The Solution:   <?php
                        function my_birth_in_days(int $year, string $month, int $day)
                        {
                            $my_birthday = strtotime($month . ' ' . $day . ' ' . $year);
                            $days = floor((time() - $my_birthday) / 60/60/24);
                            return "Days till next birthday: $days  days!"."<br>";
                        }
                        echo my_birth_in_days(1992, 'September', 8);
                        function another_my_birth_in_days(int $year, int $month, int $day){
                            $target_days = mktime(0,0,0,$month,$day,$year);
                            $today = time();
                            $diff_days = ( $today - $target_days);
                            $days = (int)($diff_days/86400);
                            return "Days till next birthday: $days days!"."<br>";
                        }
                        echo 'The Solution: ' . another_my_birth_in_days(1992, 9, 8);      
                    ?>
                       
                    </div>
                </div>
            </div> 
            <button class="questions">Question 2</button>
            <div class="panel">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary w-100 p-3 my-3 qbtn" onclick="show(this)" id="qq2">See The Question</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qc2">See The Code</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qs2">See Solution</button>
                    </div>
                    <div id="sqq2" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                    2. Write a PHP script to print the current date in the following format (assume current date is September 01, 2023)
                    </div>
                    <div id="sqc2" class="my-1 hide col-12 text-bg-dark rounded shadow">
<pre>
    <code>
    &lt;php&gt;

            $date = mktime(0, 0, 0, 9, 1, 2023);
            echo 'The Date is: ' . date('F d, Y', $date);      
        
        &lt;/php&gt;
    </code>
</pre>
                    </div>
                    <div id="sqs2" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                        The Solution:   
                        <?php
                        $date = mktime(0, 0, 0, 9, 1, 2023);
                        echo 'The Date is: ' . date('F d, Y', $date);      
                        ?>
                       
                    </div>
                </div>
            </div> 
            <button class="questions">Question 3</button>
            <div class="panel">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary w-100 p-3 my-3 qbtn" onclick="show(this)" id="qq3">See The Question</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qc3">See The Code</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qs3">See Solution</button>
                    </div>
                    <div id="sqq3" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                    3. Write a PHP script to remove all characters from a string except a-z A-Z 0-9 or " "
                    </div>
                    <div id="sqc3" class="my-1 hide col-12 text-bg-dark rounded shadow">
<pre>
    <code>
    &lt;php&gt;
            $pattern = '/[a-zA-Z0-9" "]/';
            $text =  'I love Aira Soft Academy & I love Engineer Fadi & Engineer Zakaria who doesn\'t like anyone to tell him, Engineer (:';      
            echo preg_replace($pattern, "",$text);
        &lt;/php&gt;
    </code>
</pre>
                    </div>
                    <div id="sqs3" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                        The Solution:   
                        <?php
                        $pattern = '/[a-zA-Z0-9" "]/';
                        $text =  'I love Aira Soft Academy & I love Engineer Fadi & Engineer Zakaria who doesn\'t like anyone to tell him, Engineer (:';      
                        echo preg_replace($pattern, "",$text);
                        ?>
                       
                    </div>
                </div>
            </div> 
            <button class="questions">Question 4</button>
            <div class="panel">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary w-100 p-3 my-3 qbtn" onclick="show(this)" id="qq4">See The Question</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qc4">See The Code</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary p-3 w-100 my-3 qbtn" onclick="show(this)" id="qs4">See Solution</button>
                    </div>
                    <div id="sqq4" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                    4. Write a PHP script to extract text (within parenthesis) from a string 'The quick brown [fox].'
                    </div>
                    <div id="sqc4" class="my-1 hide col-12 text-bg-dark rounded shadow">
<pre>
    <code>
    &lt;php&gt;
        $my_text = 'The quick brown [fox].';
        preg_match('#\[(.*?)\]#', $my_text, $match);
        print $match[1]."\n";
    &lt;/php&gt;
    </code>
</pre>
                    </div>
                    <div id="sqs4" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">
                        The Solution:   
                        <?php
                        
                        $my_text = 'The quick brown [fox].';
                        preg_match('#\[(.*?)\]#', $my_text, $match);
                        print $match[1]."\n";
                        ?>
                       
                    </div>
                </div>
            </div> 
            <button class="questions">Question 5</button>
            <div class="panel">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary w-100 p-3 my-3 qbtn" onclick="show(this)" id="qq5">See The Question</button>
                    </div>
                    <div class="col">
                            <a href="../Session 6/Question5/auth/login.php" class="btn btn-primary p-3 w-100 my-3 q5">See Solution</a>
                    </div>
                    <div id="sqq5" class="my-1 hide h2 p-3 col-12 text-bg-light rounded shadow">

                    5. How to upload an download files in php write example? Make 

                    <ol>
                        <li>Registration Form :
                            <ul>
                                <li>Name</li>
                                <li>Email</li>
                                <li>Phone</li>
                                <li>Password</li>
                                <li>Confirm Password</li>
                            </ul> 
                        </li>
                        <li>Must implement :
                            <ul>
                                <li>Sanitization</li>
                                <li>Validation</li>
                                <li>Redirection</li>
                            </ul>
                        </li>
                    </ol>

                    Save The Form Data in json file
                    Check If the User authenticate using session, if not redirect to login page
                    Make Login Form, Check if the user data exists in the json file
                </div>
                </div>
            </div> 
        </div>
    </div>
    
    <script src="../../mainFiles/js/myjs.js"></script>
</body>
</html>