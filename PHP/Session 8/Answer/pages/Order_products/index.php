<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require '../../Logic/Order_products/all.php';
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
<h1 class="text-center">All Order Products</h1>
<div class="div-table-products">
    <a class="c-customer" href="create.php">Create New Order Products</a>
    <table class="tb-customer">
        <thead>
            <tr class="tr-customer">
                <th>ID</th>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Product Quantit</th>
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
                        <td><?= $row["order_id"] ?></td>
                        <td><?= $row["product_id"] ?></td>
                        <td><?= $row["product_quantity"] ?></td>
                        <td><?= $row["price"] ?></td>
                        <td>
                            <a class='success-a' href="../../Logic/Order_products/edit.php?id=<?= $row['id'] ?>">Edit</a>
                            <a class='danger-a' href="../../Logic/Order_products/delete.php?id=<?= $row['id'] ?>">Delete</a>
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