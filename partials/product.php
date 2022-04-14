<div >
    <section class="typePhone">
        <div>
            <h3>Iphone</h3>
        </div>
        <div class="products row">
            <?php 
                    $query = 'SELECT proName, frontImage, endImage, color, quantity, price FROM products ';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            
                            echo '<div class="product-item col-sm-3">
                                <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                    <img class="card-img-top" src="'.$row['frontImage'].'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <p class="card-text">'.$row['price'].' vnđ</p>
                                        
                                    </div>
                                    <div class="card-footer row">
                                        <a href="#" class="btn btn-primary">Đặt Hàng</a>
                                    </div>
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);
            ?>
        </div>
    </section>
    <section class="typePhone">
        <h3>SamSung</h3>
    </section>
    <section class="typePhone">
        <h3>Huawei</h3>
    </section>
    <section class="typePhone">
        <h3>Oppo</h3>
    </section>
</div>