<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require '../../Logic/Products/all.php';
include "../../Layouts/init_public.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<h2 class="center">
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div id='message-alert' class='message-d'>" .
            "<p class='message-p'>" . $_SESSION['message'] . "</p>" .
            "</div>";
        session_unset();
        session_destroy();
    }
    if (isset($_SESSION['empty'])) {
        echo "<div id='message-alert' class='message-d'>" .
            "<p class='message-p'>" . $_SESSION['empty'] . "</p>" .
            "</div>";
        session_unset();
        session_destroy();
    }
    ?>
</h2>
<h1 class="text-center">All Products</h1>
<div class="div-table-products">
    <a class="c-customer" href="create.php">Create New Product</a>
    <table class="tb-customer">
        <thead>
            <tr class="tr-customer">
                <th>ID</th>
                <th>Category ID</th>
                <th>Name</th>
                <th>Price</th>
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
                        <td><?= $row["category_id"] ?></td>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["price"] ?></td>
                        <td>
                            <a class='success-a' href="../../Logic/Products/edit.php?id=<?= $row['id'] ?>">Edit</a>
                            <a class='danger-a' href="../../Logic/Products/delete.php?id=<?= $row['id'] ?>">Delete</a>
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