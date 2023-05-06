<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require '../../Logic/Categories/all.php';
include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>


<h2 class="center">
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div id='message-alert' class='message-d'>" .
            "<p class='message-p'>" . $_SESSION['message'] . "</p>" .
            "</div>";
        unset($_SESSION['message']);
    }
    if (isset($_SESSION['empty'])) {
        echo "<div id='message-alert' class='message-d'>" .
            "<p class='message-p'>" . $_SESSION['empty'] . "</p>" .
            "</div>";
        unset($_SESSION['empty']);
    }
    ?>
</h2>
<h1 class="text-center">All Categories</h1>
<div class="div-table-categories">
    <a class="c-customer" href="create.php">Create New Categories</a>
    <table class="tb-customer">
        <thead>
            <tr class="tr-customer">
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($data) > 0) {

                while ($row = mysqli_fetch_assoc($data)) {

            ?>
                    <tr class="tr-customer">
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["name"] ?></td>
                        <td>
                            <a class='success-a' href="../../Logic/Categories/edit.php?id=<?= $row['id'] ?>">Edit</a>
                            <a class='danger-a' href="../../Logic/Categories/delete.php?id=<?= $row['id'] ?>">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>


<?php
include '../../Layouts/footer.php';
?>