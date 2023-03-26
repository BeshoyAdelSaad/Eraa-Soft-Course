<?php

/**
 * Get the filename of the currently executing script, relative to the document root.
 */
echo "<h3>Get the filename of the currently executing script, relative to the document root.</h3>";
echo $_SERVER['PHP_SELF'];

/**
 * hOW TO KNOW WHICH REQUEST METHOD WAS USED TO ACCESS THE PAGE
 */
echo "<h3>hOW TO KNOW WHICH REQUEST METHOD WAS USED TO ACCESS THE PAGE </h3>";
echo $_SERVER['REQUEST_METHOD'];

/**
 * Let's look at several $_SERVER values.
 */
echo "<h3>Let's look at several \$_SERVER values.</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";