<?php

define('TITLE', 'Sản Phẩm');
include '../partials/header.php';

// include '../partials/check_admin.php';

include '../partials/mysqli_connect.php';

$query = 'SELECT * FROM products';

if ($result = mysqli_query($dbc, $query)){
    
    while ($row = mysqli_fetch_array($result)) {

        
        
    }
} else {
    echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
            '.</p><p>Câu truy vấn là: ' . $query . '</p>';
}

mysqli_close($dbc);

include '../partials/footer.php';
?>