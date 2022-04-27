<?php
session_start();
if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
    include '../partials/mysqli_connect.php';
    $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";



    
}
?>
<script type="text/javascript">
localStorage.setItem('proID', '<?php echo $_SESSION['proID'];?>');  
location.href="cart.php";
function addCart(id) {
  alert("Thêm thành công!");
}
</script>