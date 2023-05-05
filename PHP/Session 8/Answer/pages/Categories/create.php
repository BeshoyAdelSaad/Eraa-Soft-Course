<?php
include "../../Layouts/init_public.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Create Categories</h1>
    <form action="../../Logic/Categories/create.php" method="post">

        <input type="text" name="name" placeholder="Name..." />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>



<?php
include '../../Layouts/footer.php';
?>