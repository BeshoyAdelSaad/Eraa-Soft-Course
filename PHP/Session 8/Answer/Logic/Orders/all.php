<?php

include '../../logic/connection.php';

$query = "SELECT * FROM customers";

$recording = mysqli_query($connection, $query);

$customers = mysqli_num_rows($recording);

mysqli_close($connection);







