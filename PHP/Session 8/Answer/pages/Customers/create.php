<?php
include "../../Layouts/init.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Create Customer</h1>
    <form action="../../Logic/Customers/create.php" method="post">

        <input type="text" name="name" placeholder="Name..." />
        <input type="text" name="address" placeholder="Address..." />
        <input type="number" name="tel" placeholder="Tel..." />
        <input type="email" name="email" placeholder="Email..." />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>


<?php
include '../../Layouts/footer.php';
?>