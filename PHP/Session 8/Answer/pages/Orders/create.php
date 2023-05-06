<?php

include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Create Your Order</h1>
    <form action="../../Logic/Orders/create.php" method="post">

        <input type="number" name="customer_id" placeholder="Customer ID..." />
        <input type="number" name="total" placeholder="Total..." />
        <input type="text" name="shipping_address_id" placeholder="Shipping Address ID..." />
        <input type="text" name="status" placeholder="Status..." />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>

<?php
include '../../Layouts/footer.php';
?>