<?php

define('TITLE', 'Sửa một Trích dẫn');
include '../partials/header.php';

echo '<h2>Sửa một Trích dẫn</h2>';

include '../partials/check_admin.php';

include '../partials/mysqli_connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) ) {

    $query = "SELECT * FROM products WHERE proID = {$_GET['id']}";

    if ($result = mysqli_query($dbc, $query)) {

        $row = mysqli_fetch_array($result);

        echo '<form action="edit_product.php" method="post">
            <p><label>ID sản phẩm <input type="text" name="proID" value="' . htmlspecialchars($row['proID']) . '></label></p>
            <p><label>Tên sản phẩm <input type="text" name="proName" value="' . htmlspecialchars($row['proName']) . '></label></p>
            <p><label>Tên hãng <input type="text" name="company" value="' . htmlspecialchars($row['company']) . '></label></p>
            <p><label>Hình ảnh <input type="text" name="frontImage" value="' . htmlspecialchars($row['frontImage']) . '></label></p>
            <p><label>Hình ảnh khác <input type="text" name="endImage" value="' . htmlspecialchars($row['endImage']) . '></label></p>
            <p><label>Mô tả <textarea name="proDes" rows="5" cols="30" value="' . htmlspecialchars($row['proDes']) . '></textarea></label></p>
            <p><label>Màu <input type="text" name="color" value="' . htmlspecialchars($row['color']) . '></label></p>
            <p><label>Số lượng <input type="number" name="quantity" value="' . htmlspecialchars($row['quantity']) . '></label></p>
            <p><label>Giá <input type="number" name="price" value="' . htmlspecialchars($row['price']) . '></label></p>
            <p><input type="submit" name="submit" value="Cập nhật Sản Phẩm này!"></p>
            </form>';
    } else {
        echo '<p class="error">Không thể lấy được sản phẩm này vì:<br>' . mysqli_error($dbc) . 
                '.</p><p>Câu truy vấn này là: ' . $query . '</p>';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0)) {

    $problem = FALSE;
    if (!empty($_POST['proID']) && !empty($_POST['proName'])&& !empty($_POST['company'])&& !empty($_POST['frontImage'])&& !empty($_POST['proDes'])&& !empty($_POST['color'])&& !empty($_POST['quantity'])&& !empty($_POST['price'])) {
        echo '<p class="error">Hãy gõ vào cả Trích dẫn và Nguồn của nó!</p>';
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