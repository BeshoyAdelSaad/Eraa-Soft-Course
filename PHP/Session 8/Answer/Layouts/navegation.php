<nav>
    <div class="navegation">
        <a href="<?= $root ?>index.php" class="nav-s nav-link">Home</a>
        <a href="<?= $nav_links ?>Customers/index.php" class="nav-s nav-link">Customers</a>
        <a href="<?= $nav_links ?>Categories/index.php" class="nav-s nav-link">Categories</a>
        <a href="<?= $nav_links ?>Products/index.php" class="nav-s nav-link">Products</a>
        <a href="<?= $nav_links ?>Orders/index.php" class="nav-s nav-link">Orders</a>
        <a href="<?= $nav_links ?>Order_products/index.php" class="nav-s nav-link">Order Products</a>

        <?php
        if (isset($_SESSION['login'])) { ?>

            <a href="<?= $root ?>Logic/Auth/logout.php?logout=ture" class="nav-e nav-link">Logout</a>
            <a href="<?= $nav_links ?>Auth/login.php" class="nav-e nav-link">Profile</a>
            <a href="<?= $nav_links ?>Auth/login.php" class="nav-e nav-link">Welcome <?= $_SESSION['login']; ?></a>
        <?php } else { ?>

            <a href="<?= $nav_links ?>Auth/login.php" class="nav-e nav-link">Login</a>
            <a href="<?= $nav_links ?>Auth/register.php" class="nav-e nav-link">Register</a>
        <?php } ?>
    </div>
</nav>