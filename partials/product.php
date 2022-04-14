<div >
    <section class="typePhone">
        <div>
            <h3>Iphone</h3>
        </div>
        <ul class="products">
            <?php 
                    $query = 'SELECT proName, frontImage, endImage, color, quantity, price FROM products ';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
            ?>
                <li class="product-item">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                        <img class="card-img-top" src="/GitHub/CNWeb/image/iphone11-green.png">
                        <div class="card-body">
                            <h5 class="card-title">Iphone 11 - Green</h5>
                            <p class="card-text">Some quick example text</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </li>
            <?php 
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);
            ?>
        </ul>
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