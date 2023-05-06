<?php

include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Edit Product</h1>
    <form action="../../Logic/Products/edit.php" method="post">
        <input type="hidden" name="id" placeholder="id..." value="<?= $_GET['id'] ?>" />
        <input type="text" name="category_id" placeholder="category_id..." value="<?= $_GET['category_id'] ?>" />
        <input type="text" name="name" placeholder="Name..." value="<?= $_GET['name'] ?>" />
        <input type="number" name="price" placeholder="price..." value="<?= $_GET['price'] ?>" />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>




<?php
include '../../Layouts/footer.php';
?>