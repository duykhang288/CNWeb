<div >
    <section class="company">
        <div>
            <h3>Apple</h3>
        </div>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="Apple"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            
                            echo '<div class="product-item col-sm-3">
                                <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;" onclick="window.location.href="product_detail.php?id='.$row['proID'].'"">
                                    
                                    <img class="card-img-top" src="'.$row['frontImage'].'">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn-custom btn">Yêu thích</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn-custom btn">Đặt Hàng</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    //mysqli_close($dbc);
            ?>
        </div>
    </section>
    
    <section class="company">
        <h3>SamSung</h3>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="SAMSUNG"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            
                            echo '<div class="product-item col-sm-3">
                                <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                    <img class="card-img-top" src="'.$row['frontImage'].'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn-custom btn">Yêu thích</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn-custom btn">Đặt Hàng</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    //mysqli_close($dbc);
            ?>
        </div>
    </section>
    <section class="company">
        <h3>Huawei</h3>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="HUAWEI"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            
                            echo '<div class="product-item col-sm-3">
                                <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                    <img class="card-img-top" src="'.$row['frontImage'].'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn-custom btn">Yêu thích</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn-custom btn">Đặt Hàng</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    //mysqli_close($dbc);
            ?>
        </div>
    </section>
    <section class="company">
        <h3>Oppo</h3>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="OPPO"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            
                            echo '<div class="product-item col-sm-3">
                                <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                    <img class="card-img-top" src="'.$row['frontImage'].'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn-custom btn">Yêu thích</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn-custom btn">Đặt Hàng</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    //mysqli_close($dbc);
            ?>
        </div>
    </section>
    <!-- <?php 
        $query = 'SELECT * FROM products ';
        if ($result = mysqli_query($dbc, $query)){
            $company="";
            while ($row = mysqli_fetch_array($result)) {
                $queryCom= 'SELECT * FROM products where company="'.$row['company'].'";';
                //$htmlspecialchars = 'htmlspecialchars';
                if($company!=$row['company']){
                    echo '
                    <section class="company">
                    <div>
                        <h3>'.$row['company'].'</h3>
                    </div>
                    <div class="products row">';
                    $company=$row['company'];
                }
                if($company=mysqli_query($dbc, $queryCom)){
                    
                    while ($row = mysqli_fetch_array($company)) {
                        echo '
                        <div class="product-item col-sm-3">
                            <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                <img class="card-img-top" src="'.$row['frontImage'].'">
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['proName'].'</h5>
                                    <p>'.$row['company'].'</p>
                                    <div class="price">'.$row['price'].' VNĐ</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn-custom btn">Yêu thích</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn-custom btn">Đặt Hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                }
                echo '</div>
                        </section>';
                
            }
        } else {
            echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                    '.</p><p>Câu truy vấn là: ' . $query . '</p>';
        }
            
        mysqli_close($dbc);
    ?> -->
</div>