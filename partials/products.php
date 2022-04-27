<div >
    <?php
    include '../partials/addcart.php';
    
    include '../partials/mysqli_connect.php';
    
  
?>
   
    <section class="company">
        <div>
            <h3>Apple</h3>
        </div>
        <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
        <div class="products row container-fluid">
         <!-- onclick="addCart("<?php echo $row['proID']?>")" -->
            <?php 
                    $query = 'SELECT * FROM products where company="Apple"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    <a href="product_detail.php?id='.$row['proID'].'">
                                    <img class="card-img-top" src="'.$row['frontImage'].'">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                                <a href="checkout.php?id='.$row['proID'].'" id="btn-cart" class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a>
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
        <h3>Samsung</h3>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="Samsung"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    
                                <a href="product_detail.php?id='.$row['proID'].'">
                                <img class="card-img-top" src="'.$row['frontImage'].'">
                                </a>
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                                <a href="cart.php?item='.$row['proID'].'"  id="btn-cart" class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a>
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
                            
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    
                                <a href="product_detail.php?id='.$row['proID'].'">
                                <img class="card-img-top" src="'.$row['frontImage'].'">
                                </a>
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                                <a href="cart.php?item='.$row['proID'].'"  id="btn-cart" class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a>
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
                            
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    
                                <a href="product_detail.php?id='.$row['proID'].'">
                                <img class="card-img-top" src="'.$row['frontImage'].'">
                                </a>
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['proName'].'</h5>
                                        <div class="price">'.$row['price'].' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                                <a href="cart.php?item='.$row['proID'].'"  id="btn-cart" class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a>
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
                    
                  //  mysqli_close($dbc);
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