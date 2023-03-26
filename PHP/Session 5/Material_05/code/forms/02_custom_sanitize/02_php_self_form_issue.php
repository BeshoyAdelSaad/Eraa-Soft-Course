<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        var_dump($_GET);
    }

?>

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <input type="text" name="name">
    <input type="submit">

</form>