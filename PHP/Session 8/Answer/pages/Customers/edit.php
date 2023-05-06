<?php
include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Edit Customer</h1>
    <form action="../../Logic/Customers/edit.php" method="post">
        <input type="hidden" name="id" placeholder="id..." value="<?= $_GET['id'] ?>" />
        <input type="text" name="name" placeholder="Name..." value="<?= $_GET['name'] ?>" />
        <input type="text" name="address" placeholder="Address..." value="<?= $_GET['address'] ?>" />
        <input type="number" name="tel" placeholder="Tel..." value="<?= $_GET['tel'] ?>" />
        <input type="email" name="email" placeholder="Email..." value="<?= $_GET['email'] ?>" />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>



<?php
include '../../Layouts/footer.php';
?>