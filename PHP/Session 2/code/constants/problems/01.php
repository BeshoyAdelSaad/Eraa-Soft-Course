<?php

/**
 * Step1: Create name constant and store your name in it. 
 * Step2: declare a displayName() function then echo the previous constant 
 * within this function
 */

define("NAME", "fady");

function displayName()
{
    echo NAME;
}

displayName();