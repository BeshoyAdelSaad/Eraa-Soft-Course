<?php

include "../../Layouts/init.php";
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
        <select name="status" id="" value="<?= $_GET['status'] ?>">
            <option value="paid">Paid</option>
            <option value="checkout">Checkout</option>
            <option value="canceled">Canceled</option>
            <option value="failed">Failed</option>
            <option value="expired">Expired</option>
        </select>
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>

<?php
include '../../Layouts/footer.php';
?>