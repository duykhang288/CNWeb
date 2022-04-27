<?php

define('TITLE', 'Thêm Sản Phẩm');
include '../partials/header.php';

echo '<h2>Thêm một Sản phẩm</h2>';

//include '../partials/check_admin.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST['proID']) && !empty($_POST['proName'])&& !empty($_POST['company'])&& !empty($_POST['frontImage'])&& !empty($_POST['proDes'])&& !empty($_POST['color'])&& !empty($_POST['quantity'])&& !empty($_POST['price'])) {

		include "../partials/mysqli_connect.php";

		// $query = "INSERT INTO products (proID, proName, company, frontImage, proDes, color, quantity, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		// $stmt = mysqli_prepare($dbc, $query);
		// mysqli_stmt_bind_param($stmt,'sssd' , $_POST['proID'], $_POST['proName'], $_POST['company'], $_POST['frontImage'], $_POST['proDes'], $_POST['color'], $_POST['quantity'], $_POST['price']);

		// mysqli_stmt_execute($stmt);
		
		// if (mysqli_stmt_affected_rows($stmt) == 1) {
		// 	echo '<p>Đã thêm được sản phẩm</p>';
		// } else {
		// 	echo '<p class="error ">Không thể thêm sản phẩm vì:<br>' . mysqli_error($dbc) . '.</p><p>Câu truy vấn là: ' . $query .'</p>';
		// }
		// mysqli_close($dbc);

		if (isset($_POST['proID'])){
			$id = $_POST['proID'];
		}
		if (isset($_POST['proName'])){
			$name = $_POST['proName'];
		}
		if (isset($_POST['company'])){
			$company = $_POST['company'];
		}
		if (isset($_POST['frontImage'])){
			$img = $_POST['frontImage'];
		}
		if (isset($_POST['proDes'])){
			$des = $_POST['proDes'];
		}
		if (isset($_POST['color'])){
			$color = $_POST['color'];
		}
		if (isset($_POST['quantity'])){
			$quantity = $_POST['quantity'];
		}
		if (isset($_POST['price'])){
			$price = $_POST['price'];
		}
		$query = "INSERT INTO products (proID, proName, company, frontImage, proDes, color, quantity, price) VALUES ('$id', '$name', '$company', '$img', '$des', '$color', '$quantity', '$price')";
		$stmt = mysqli_prepare($dbc, $query);

		mysqli_close($dbc);

	} else {
		echo '<p class="error text-danger">Hãy gõ vào tất cả ô trống!</p>';
	}
}

?>
<form action="add_product.php" method="post">
  <div class="form-group w-25">
    <label>ID sản phẩm</label>
    <input type="text" name="proID" size="20" class="form-control" >
  </div>
  <div class="form-group w-25">
    <label>Tên sản phẩm</label>
    <input type="text" name="proName" class="form-control">
  </div>
  <div class="form-group w-25">
    <label>Tên hãng</label>
    <input type="text" name="company" class="form-control">
  </div>
  <div class="form-group w-50">
    <label>Hình ảnh</label>
    <input type="text" name="frontImage" class="form-control">
  </div>
  <div class="form-group w-50">
    <label>Mô tả</label>
	<textarea type="text" name="proDes" class="form-control" rows="5"></textarea>
  </div>
  <div class="form-group w-25">
    <label>Màu</label>
    <input type="text" name="color" class="form-control">
  </div>
  <div class="form-group w-25">
    <label>Số lượng</label>
    <input type="number" name="quantity" class="form-control">
  </div>
  <div class="form-group w-25">
    <label>Giá</label>
    <input type="number" name="price"  class="form-control mb-2">
  </div>

  <input class="btn-custom w-25" type="submit" name="submit" value="Thêm Sản phẩm này!">
</form>

<?php include '../partials/footer.php'; ?>