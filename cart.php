<?php
require 'inc/head.php';
?>
<div class="cart container-fluid">
    <div class="row no-gutters justify-content-md-center">
        <?php
        for($i = 0;$i<count($_SESSION['cart']); $i++) {
            echo $_SESSION['cart'][$i]; ?> <br/>
        <?php } ?>
    </div>
</div>
<?php require 'inc/foot.php'; ?>
