<?php

define('TITLE', 'Xóa một Sản phẩm');
include '../partials/header.php';

echo '<h2>Xóa một Sản phẩm</h2>';

include '../partials/check_admin.php';

include '../partials/mysqli_connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) ) {

    $query = "SELECT quote, source, favorite FROM quotes WHERE id = {$_GET['id']}";

    if ($result = mysqli_query($dbc, $query)) {
        while($row = mysqli_fetch_array($result)){

            echo '
                <form action="add_product.php" method="post">
                <div class="form-group w-25">
                    <label>ID sản phẩm</label>
                    <input type="text" name="proID" class="form-control" value="'.$row['proID'] . '">
                </div>
                <div class="form-group w-25">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="proName" class="form-control" value="' . $row['proName'] . '">
                </div>
                <div class="form-group w-25">
                    <label>Tên hãng</label>
                    <input type="text" name="company" class="form-control" value="' . $row['company'] . '">
                </div>
                <div class="form-group w-50">
                    <label>Hình ảnh</label>
                    <input type="text" name="frontImage" class="form-control" value="' . $row['frontImage'] . '">
                </div>
                <div class="form-group w-50">
                    <img width="150px" src="' . $row['frontImage'] . '">
                </div>
                <div class="form-group w-50">
                    <label>Mô tả</label>
                    <textarea type="text" name="proDes" class="form-control" rows="5">' .$row['proDes'] . '</textarea>
                </div>
                <div class="form-group w-25">
                    <label>Màu</label>
                    <input type="text" name="color" class="form-control" value="' . $row['color'] . '">
                </div>
                <div class="form-group w-25">
                    <label>Số lượng</label>
                    <input type="number" name="quantity" class="form-control" value="' .$row['quantity'] . '">
                </div>
                <div class="form-group w-25">
                    <label>Giá</label>
                    <input type="number" name="price"  class="form-control mb-2" value="' . $row['price'] . '">
                </div>
    
                <input class="btn-custom w-25" type="submit" name="submit" value="Sửa sản phẩm này!">
                </form>';
            }
    } else {
        echo '<p class="error">Đã có lỗi xảy ra.</p>';
    }
}
include '../partials/footer.php';
?>