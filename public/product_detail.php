<?php

    define('TITLE', 'Chi tiết');
    include '../partials/header.php';
    
    if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
       
?>
<?php
        include '../partials/mysqli_connect.php';
        $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            
                            echo '<h1>'.$row['company'].'</h1>
                                <div class="container-fluid row mb-5">
                                    <div class="col-lg-6 container-fluid">
                                      <div >
                                        <img src="'.$row['frontImage'].'" class="d-block w-100" alt="...">
                                      </div>
                                    </div>
                                    <div class="col-lg-6 container-fluid">
                                        <h2>'.$row['proName'].'</h2>
                                        <p class="h4">'.$row['price'].'đ</p>
                                        <p>'.$row['proDes'].'</p>
                                        <div class="row">
                                        <div class="col-6">
                                        <button class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a>
                                    </div>
                                            
                                        </div>
                                    </div>
                                </div';
                         
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);
    }



?>
<?php
    echo '</main>';
    include '../partials/footer.php';
?>