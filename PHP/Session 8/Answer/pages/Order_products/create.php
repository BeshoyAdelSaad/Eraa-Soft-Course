<?php

include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Create Product</h1>
    <form action="../../Logic/Order_products/create.php" method="post">

        <input type="text" name="order_id" placeholder="Order id..." />
        <input type="text" name="product_id" placeholder="product_id..." />
        <input type="number" name="product_quantity" placeholder="Product Quantity..." />
        <input type="number" name="price" placeholder="price..." />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>



<?php
include '../../Layouts/footer.php';
?>