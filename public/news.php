<?php
    include '../partials/header.php';
        include '../partials/mysqli_connect.php';

        echo '<h1 style="text-align: center">Tin tức</h1>';

        $query = "SELECT * FROM news";
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo '<div class=" col-md-4 col-lg-3 col-sm-6 col-3">
                                <div class="card m-3 m-2 p-3 mb-5 border-1" style="width: 20rem;" >
                                    <a href="news_detail.php?id='.$row['nID'].'">
                                    <img class="card-img-top" src="'.$row['image'].'">
                                    </a>
                                    <h4>'.$row['title'].'</h4>
                                    
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);



?>
<?php
    include '../partials/footer.php';
?>