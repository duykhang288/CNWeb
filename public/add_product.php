<?php

define('TITLE', 'Thêm Sản Phẩm');
include '../partials/header.php';

echo '<h2>Thêm một Sản phẩm</h2>';

//include '../partials/check_admin.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST['proID']) && !empty($_POST['proName'])&& !empty($_POST['company'])&& !empty($_POST['frontImage'])&& !empty($_POST['proDes'])&& !empty($_POST['color'])&& !empty($_POST['quantity'])&& !empty($_POST['price'])) {

		include "../partials/mysqli_connect.php";

		$query = "INSERT INTO products (proID, proName, company, frontImage, endImage, proDes, color, quantity, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, 'ssi', $_POST['proID'], $_POST['proName'], $_POST['company'], $_POST['frontImage'], $_POST['endImage'], $_POST['proDes'], $_POST['color'], $_POST['quantity'], $_POST['price']);

		mysqli_stmt_execute($stmt);

		if (mysqli_stmt_affected_rows($stmt) == 1) {
			echo '<p>Đã thêm được sản phẩm</p>';
		} else {
			echo '<p class="error">Không thể thêm sản phẩm vì:<br>' . mysqli_error($dbc) . '.</p><p>Câu truy vấn là: ' . $query .'</p>';
		}
		mysqli_close($dbc);
	} else {
		echo '<p class="error">Hãy gõ vào tất cả ô trống!</p>';
	}
}

?>

<form action="add_product.php" method="post">
	<p><label>ID sản phẩm <input type="text" name="proID"></label></p>
	<p><label>Tên sản phẩm <input type="text" name="proName"></label></p>
	<p><label>Tên hãng <input type="text" name="company"></label></p>
	<p><label>Hình ảnh <input type="text" name="frontImage"></label></p>
	<p><label>Hình ảnh khác <input type="text" name="endImage"></label></p>
	<p><label>Mô tả <textarea name="proDes" rows="5" cols="30"></textarea></label></p>
	<p><label>Màu <input type="text" name="color"></label></p>
	<p><label>Số lượng <input type="number" name="quantity"></label></p>
	<p><label>Giá <input type="number" name="price"></label></p>
	<p><input class="btn btn-custom" type="submit" name="submit" value="Thêm Sản phẩm này!"></p>
</form>

<?php include '../partials/footer.php'; ?>