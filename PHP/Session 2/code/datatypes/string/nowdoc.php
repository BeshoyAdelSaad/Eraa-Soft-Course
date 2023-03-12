<?php

echo 'heloo from single \'quote\' ';

$name = 'omar';

$nowdoc = <<<'TEXT'

                hello my name is '

    TEXT;

echo $nowdoc;