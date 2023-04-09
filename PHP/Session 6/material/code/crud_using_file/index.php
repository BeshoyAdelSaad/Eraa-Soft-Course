<?php
    $students = json_decode(file_get_contents('data.json'), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <h1 class="text-center my-5">All Students</h1>
            <a class="btn btn-primary mb-5" href="pages/create.php">Add New Student</a>
            <div class="row">

                <!-- Messages -->
                <?php require_once "inc/messages.php" ?>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach($students as $student) {
                        ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $student['name'] ?></td>
                            <td><?= $student['email'] ?></td>
                            <td><?= $student['age'] ?></td>
                            <td>
                                <a class="btn btn-secondary" href="pages/edit.php?id=<?= $i ?>">Edit</a>
                                <a class="btn btn-danger" href="logic/destroy.php?id=<?= $i++ ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>