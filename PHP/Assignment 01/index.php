<?php 
    // Lorem text in a variable
    $string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab adipisci quos repudiandae nemo hic nam, iusto autem dolor recusandae officiis quisquam nesciunt alias quod? Voluptates veniam minima placeat doloremque dicta.";
    
    // length of lorem text
    $length_string = strlen($string);
    
    // Lorem text without question mark
    $str_Withoud_Q_M = str_replace("?", "", $string);
    
    // Lorem text with upper case words
    $upper_case_words = ucwords($string);
    
    $name = "mohamed Khaled";
   
    // Variable $name in reverse
    $rev_name = strrev($name);

    // Variable name in upper case
    $upper_case_name = strtoupper($string);

    // Variable name in lower case
    $lower_case_name = strtolower($string);

    // Variable name in first character to upper case
    $upper_case_first = ucfirst($string);
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
    
    
    <p>
    <?php echo $string; ?>
    </p>

    <h3>
        The length of lorem text = <?php echo $length_string; ?>
    </h3>

    <h3>
        Lorem text after removing the question marks: <?php echo $str_Withoud_Q_M; ?>
    </h3>

    <h3>
        Lorem text with uppercase words: <?php echo $upper_case_words; ?>
    </h3>
    <hr>

    <h5>
        <?php
            echo $rev_name;
        ?>
    </h5>

    <h3>
        <?php
            echo strcmp($name,$rev_name);
        ?>
    </h3>

    <h3>
        <?php
            echo $upper_case_name;
        ?>
    </h3>

    <h3>
        <?php
            echo $lower_case_name;
        ?>
    </h3>

    <h3>
        <?php
            echo $upper_case_first;
        ?>
    </h3>
    <hr>

    <h1>What is the difference between single and double quotes in PHP?</h1>
    <ul>
        <li>Single quotes:
            <ol>
                <li>will display things almost completely "as is.</li>
                <li>Variables and most escape sequences will not be interpreted.</li>
                <li>The exception is that to display a literal single quote, you can escape it with a back slash \', and to display a back slash, you can escape it with another backslash \\ (So yes, even single quoted strings are parsed).</li>
            </ol>
        </li>
        <li>Double quotes:
            <ol>
                <li>will display a host of escape sequences (including some regexes), and variables in the strings will be evaluated.</li>
                <li>You can use curly braces to isolate the name of the variable you want evaluated.</li>
            </ol>
        </li>
    </ul>
    <hr>

    <?php 
        $name = "Morad";
        echo "Hello \"my name is $name\" I love programming \ Back-End is easy PHP is awesome";
        echo "<br>";
        echo "<br>";
        
        echo <<<"text"
                Hello "my name is $name" I love programming \ Back-End is easy PHP is awesome
                text;
    ?>

    <hr>
    <h1>
        What is the difference between echo and print?
    </h1>
    <ul>

        <li>Echo Statement:
            <ol>
                <li>In Echo, we can pass multiple arguments separated by commas.</li>
                <li>In Echo, we can exhibit the outputs of one or more strings separated by commas.</li>
                <li>It never returns any value.</li>
                <li>This statement is fast as compared to the print statement.</li>
            </ol>
        </li>

        <li>Print Statement
            <ol>
                <li>In Print, we cannot pass multiple arguments.</li>
                <li>Through the Print statement, we can only show the strings.</li>
                <li>It always returns the integer value that is 1.</li>
                <li>It is slow as compared to the echo statement.</li>
            </ol>
        </li>
    </ul>

    <h1>
    What is the difference between HTTP and HTTPS?
    </h1>
    <ul>
        <li>HTTP Protocol:
            <ol>
                <li>HTTP stands for HyperText Transfer Protocol.</li>
                <li>In HTTP, URL begins with “http://”.</li>
                <li>HTTP uses port number 80 for communication.</li>
                <li>HTTP is considered to be insecure.</li>
                <li>HTTP Works at Application Layer.</li>
                <li>In HTTP, Encryption is absent.</li>
                <li>HTTP does not require any certificates.</li>
                <li>HTTP speed is faster than HTTPS.</li>
                <li>HTTP does not improve search ranking.</li>
                <li>HTTP does not use data hashtags to secure data.</li>
                <li>HTTP used to transfer the text, video, images via web pages.</li>
            </ol>
        </li>

        <li>HTTPS Protocol:
            <ol>
                <li>HTTPS stands for HyperText Transfer Protocol Secure.</li>
                <li>URL starts with “https://”</li>
                <li>HTTPS uses port number 443</li>
                <li>HTTPS is considered to be secure.</li>
                <li>HTTPS works at Transport Layer</li>
                <li>In HTTPS, Encryption is present.</li>
                <li>HTTPS needs SSL Certificates.</li>
                <li>HTTPS speed is slower than HTTP</li>
                <li>HTTPS improves search ranking.</li>
                <li>HTTPS will have the data before sending it and return it to its original state on the receiver side.</li>
                <li>HTTPS used to transfer data securely via network.</li>
            </ol>
        </li>
    </ul>
    
    <h1>
    What is the difference between Scripting and programming languages?
    </h1>
    <ul>
        <li>programming languages:
            <ol>
                <li>A programming language is a type of computer language that consists of a set of instructions for communicating with computers.</li>
                <li>Most programming languages are compiled. The translation overhead is incurred just once when the source is compiled; after that, it merely needs to be loaded and run.</li>
                <li>Traditional programming languages are based on low-level languages.</li>
                <li>Execution of a program takes more time since they are compiled.</li>
                <li>It is used to create a new program or piece of software from the scratch.</li>
                <li>Most regular programming languages are stronger in data and control abstraction.</li>
                <li>Furthermore, a programming language runs or executes independently.</li>
                <li>A programming language generally requires many lines of code to accomplish a particular task.</li>
                <li>Programming languages have high maintenance costs.</li>
                <li>Programming languages generate .exe files.</li>
                <li>User interface design and graphic design are often partially supported by programming languages.</li>
                <li>Programming languages are designed to make full-fledged software development easier.</li>
                <li>Programming language code takes a long time to develop since more code must be written (in most cases).</li>
                <li>Programming languages are self-executable.</li>
                <li>All programming languages are not scripting languages.</li>
                <li>Examples include C, C++, Java, Python, etc.</li>
            </ol>
        </li>

        <li>Scripting languages:
            <ol>
                <li>A scripting language is a kind of programming language that is used to automate the execution of operations in a runtime environment.</li>
                <li>Most scripting languages are interpreted languages. They must be parsed, interpreted, and executed each time the program is run.</li>
                <li>Scripting languages generally prefer high-level languages.</li>
                <li>Execution of a script takes less time as scripts are generally short.</li>
                <li>It is used to enhance an existing program or automate a specific task. A scripting language is used to control the behavior of a program.</li>
                <li>Scripting languages generally emphasize the extensibility and richness of expressions.</li>
                <li>A scripting language runs inside a parent program.</li>
                <li>A scripting language usually requires fewer lines than a programming language to accomplish a task.</li>
                <li>Scripting languages typically have a low maintenance cost.</li>
                <li>Scripting languages do not create .exe files.</li>
                <li>User interface design, data types, and graphic design are all greatly aided by scripting languages.</li>
                <li>Scripting languages are used to assist programming languages and make coding easier and faster. They are typically used for open projects and web development.</li>
                <li>Scripting languages take less time to code, as fewer lines (in most cases) of code are to be written.</li>
                <li>Scripting languages require a host.</li>
                <li>All scripting languages are programming languages.</li>
                <li>Examples include Perl, PHP, JavaScript, etc.</li>
            </ol>
        </li>
    </ul>


    

</body>
</html>