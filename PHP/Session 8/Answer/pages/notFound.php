<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
</head>
<body>
    <h1 style="text-align: center;">
        <?php
            if($_GET['message']) {
                echo $_GET['message'];
            }else {
                echo "This Page Not Found";
            }
        ?>
    </h1>
</body>
</html>