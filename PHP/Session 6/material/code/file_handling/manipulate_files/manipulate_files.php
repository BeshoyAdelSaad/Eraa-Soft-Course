<?php

/**
 * Read the file and display it to the screen
 */
// readfile("names.txt");

/**
 * First you have to open the file
 */
$file = fopen('names.txt', 'a+') or die("Unable to open the file!");

/**
 * (1) Read the entire file by specifying the all number of bytes
 */
// echo fread($file, filesize('names.txt'));

/**
 * (2) Read only the pointed one line
 */
// while(!feof($file)) {
//     echo fgets($file) . "<br>";
// }

/**
 * (3) Read single character from a file
 */
// echo fgetc($file);

/**
 * Finally close the opened file
 */
fclose($file);

/**
 * Create new non-existed file
 */
$newFile = fopen('newFile.txt', 'a+');

// Write into file using fwrite
fwrite($newFile, "test writing in new file\n");
// fwrite($newFile, "jskldfjldskfj\n");

fclose($newFile);

/**
 * Read a file as an array (each line an element)
 */
$arrayFile = file("names.txt");

var_dump($arrayFile);