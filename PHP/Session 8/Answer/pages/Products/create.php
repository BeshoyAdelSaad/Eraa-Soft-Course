<?php

include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Create Product</h1>
    <form action="../../Logic/Products/create.php" method="post">

        <input type="text" name="category_id" placeholder="category_id..." />
        <input type="text" name="name" placeholder="name..." />
        <input type="number" name="price" placeholder="price..." />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>



<?php
include '../../Layouts/footer.php';
?>