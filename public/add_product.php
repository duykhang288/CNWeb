<?php

define('TITLE', 'Thêm Sản Phẩm');
include '../partials/header.php';


//include '../partials/check_admin.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST['proName']) && !empty($_POST['company'])) {

		include "../partials/mysqli_connect.php";

		// if (isset($_POST['favorite'])) {
		// 	$favorite = 1;
		// } else {
		// 	$favorite = 0;
		// }

		$query = "INSERT INTO products (proID, proName, company, frontImage, endImage, description, color, quantity, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, 'ssi', $_POST['proID'], $_POST['proName'], $_POST['company'], $_POST['frontImage'], $_POST['endImage'], $_POST['description'], $_POST['color'], $_POST['quantity'], $_POST['price']);

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

<form action="add_quote.php" method="post">
	<p><label>ID sản phẩm <input type="text" name="source"></label></p>
	<p><label>Tên sản phẩm <input type="varchar" name="source"></label></p>
	<p><label>Tên hãng <input type="text" name="source"></label></p>
	<p><label>Hình ảnh <input type="text" name="source"></label></p>
	<p><label>Hình ảnh khác <input type="text" name="source"></label></p>
	<p><label>Mô tả <textarea name="proName" rows="5" cols="30"></textarea></label></p>
	<p><label>Màu <input type="text" name="source"></label></p>
	<p><label>Số lượng <input type="text" name="source"></label></p>
	<p><label>Giá <input type="text" name="source"></label></p>
	<p><input class="btn btn-custom" type="submit" name="submit" value="Thêm Sản phẩm này!"></p>
</form>

<?php include '../partials/footer.php'; ?>