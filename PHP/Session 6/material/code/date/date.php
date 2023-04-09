<?php

// Year-Month-Day
echo date("Y-m-d");
echo "<br>";
echo "<br>";
echo date("d/m/Y");
echo "<br>";
echo "<br>";
echo date("Y-m-d h:i:s a");

/**
 * Create your own timestamp
 */
$timestamp = mktime(5, 5, 5, 1, 25, 1980);
echo "<br>";
echo "<br>";
echo "<br>";
echo date('Y-m-d', $timestamp);

/**
 * Create your own timestamp using human readable form
 */
$timestamp = strtotime("tomorrow");
$timestamp = strtotime("+2 weeks");
$timestamp = strtotime("11:52AM March 25 2023");
echo "<br>";
echo "<br>";
echo "<br>";
echo date('Y-m-d', $timestamp);