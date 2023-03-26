<?php

// htmlspecialchars()

$string = "<script>window.alert('I got u')</script>";

// echo htmlspecialchars($string);

// echo htmlentities($string);

$string = "  test \ and another \   ";

echo stripslashes($string);

echo trim($string);

