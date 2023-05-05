<?php

include "../../Layouts/init_public.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Edit Order Products</h1>
    <form action="../../Logic/Products/edit.php" method="post">
        <input type="hidden" name="id" placeholder="id..." value="<?= $_GET['id'] ?>" />
        <input type="text" name="order_id" placeholder="Order Id..." value="<?= $_GET['order_id'] ?>" />
        <input type="text" name="product_id" placeholder="Product Id..." value="<?= $_GET['product_id'] ?>" />
        <input type="number" name="product_quantity" placeholder="Product Quantit..." value="<?= $_GET['product_quantit'] ?>" />
        <input type="number" name="price" placeholder="price..." value="<?= $_GET['price'] ?>" />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>




<?php
include '../../Layouts/footer.php';
?>