<?php

define('TITLE', 'Sửa một Sản Phẩm');
include '../partials/header.php';

echo '<h2>Sửa một Sản phẩm</h2>';

include '../partials/check_admin.php';

include '../partials/mysqli_connect.php';

if (isset($_GET['id'])  ) {

    $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";

    if ($result = mysqli_query($dbc, $query)) {

        while($row = mysqli_fetch_array($result)){

        echo '<form action="edit_product.php" method="post">
            <p><label>ID sản phẩm <input type="text" name="proID" value="' . $row['proID'] . '"></label></p>
            <p><label>Tên sản phẩm <input type="text" name="proName" value="' . $row['proName'] . '"></label></p>
            <p><label>Tên hãng <input type="text" name="company" value="' . $row['company'] . '"></label></p>
            <p><label>Hình ảnh <input type="text" name="frontImage" value="' . $row['frontImage'] . '"></label></p>
            <img width="150px" src="' . $row['frontImage'] . '">
            <p><label>Mô tả <textarea name="proDes" rows="5" cols="30" >' .$row['proDes'] . '</textarea></label></p>
            <p><label>Màu <input type="text" name="color" value="' . $row['color'] . '"></label></p>
            <p><label>Số lượng <input type="number" name="quantity" value="' .$row['quantity'] . '"></label></p>
            <p><label>Giá <input type="number" name="price" value="' . $row['price'] . '"></label></p>
            <p><input type="submit" name="submit" value="Cập nhật Sản Phẩm này!"></p>
            </form>';
        }
    } else {
        echo '<p class="error">Không thể lấy được sản phẩm này vì:<br>' . mysqli_error($dbc) . 
                '.</p><p>Câu truy vấn này là: ' . $query . '</p>';
    }
} elseif (isset($_POST['id'])) {

    $problem = FALSE;
    if (!empty($_POST['proID']) && !empty($_POST['proName'])&& !empty($_POST['company'])&& !empty($_POST['frontImage'])&& !empty($_POST['proDes'])&& !empty($_POST['color'])&& !empty($_POST['quantity'])&& !empty($_POST['price'])) {
        echo '<p class="error">Hãy gõ vào tất cả các ô trống !</p>';
        $problem = TRUE;
    }

    if (!$problem) {
        $query = "UPDATE products SET proID=?, proName=?, company=?, frontImage=?, endImage=?, proDes=?, color=?, quantity=?, price=? WHERE proID=?";
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, 'ssii', $_POST['proID'], $_POST['proName'], $_POST['company'], $_POST['frontImage'], $_POST['endImage'], $_POST['proDes'], $_POST['color'], $_POST['quantity'], $_POST['price']);

        if ($result = mysqli_stmt_execute($stmt)) {
            echo '<p>Sản phẩm này đã được cập nhật.</p>';
        } else {
            echo '<p class="error">Không thể cập nhật Sản phẩm này vì: <br>' . mysqli_error($dbc) .
                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
        }
    }
} else {
    echo '<p class="error">Đã có lỗi xảy ra.</p>';
}

include '../partials/footer.php';
?>