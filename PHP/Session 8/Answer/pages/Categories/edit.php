<?php
include "../../Layouts/init_public.php";
include "../../Layouts/header.php";
include "../../Layouts/navegation.php";
?>

<div class="create-customer-d">
    <h1 class="title-create">Edit Categories</h1>
    <form action="../../Logic/Categories/edit.php" method="post">
        <input type="hidden" name="id" placeholder="id..." value="<?= $_GET['id'] ?>" />
        <input type="text" name="name" placeholder="Name..." value="<?= $_GET['name'] ?>" />
        <input type="submit" class="sub-cr-cus" />
    </form>
</div>

<?php
include '../../Layouts/footer.php';
?>