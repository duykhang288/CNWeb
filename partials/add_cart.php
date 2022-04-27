<?php
session_start();
if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
    include '../partials/mysqli_connect.php';
    $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";



    
}
?>
<script type="text/javascript">
location.href="cart.php";
</script>