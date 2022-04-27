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
function addCart(code) {
  item = itemList.find((item) => item.code === code);
  if (typeof localStorage[code] === "undefined") {
    window.localStorage.setItem(item.code, "1");
    console.log(code);
  } else {
    window.localStorage.setItem(item.code, "1");
    console.log(code);
  }
  alert("Thêm thành công!");
}
</script>