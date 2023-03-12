<?php

/**
 * - I can write directly double quotes inside heredoc
 * - I can write escapse sequences in heredoc
 * - I can display variable inside heredoc
 */
echo "hello from \"PHP\" ";

$name = "abdo";

$test = <<<"TEXT"

    

TEXT;

echo $test;


$table = <<<text
    <table border="1">
        <thead class="test">
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr>
                <td>Omar</td>
                <td>25</td>
            </tr>
            <tr>
                <td>els3edy</td>
                <td>22</td>
            </tr>
        </tbody>
    </table>
text;

echo $table;

echo $table;
echo $table;
echo $table;
echo $table;
echo $table;
?>