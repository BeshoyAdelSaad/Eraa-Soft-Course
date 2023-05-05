<?php

include "../../Layouts/init_public.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Edit Your Order</h1>
    <form action="../../Logic/Orders/edit.php" method="post">
        <input type="hidden" name="id" placeholder="id..." value="<?= $_GET['id'] ?>" />
        <input type="number" name="customer_id" placeholder="Customer Id..." value="<?= $_GET['customer_id'] ?>" />
        <input type="number" name="total" placeholder="Total..." value="<?= $_GET['total'] ?>" />
        <input type="text" name="shipping_address_id" placeholder="Shipping Address Id..." value="<?= $_GET['shipping_address_id'] ?>" />
        <input type="text" name="status" placeholder="Email..." value="<?= $_GET['status'] ?>" />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>

<?php
include '../../Layouts/footer.php';
?>