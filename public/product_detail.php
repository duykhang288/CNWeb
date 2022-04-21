<?php
    include '../partials/header.php';
    if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
        echo $_GET['id'];
?>
<?php
        include '../partials/mysqli_connect.php';
        $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            
                            echo '<h1>'.$row['company'].'</h1>
                                <div class="container-fluid row">
                                    <div class="col-lg-6 container-fluid">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                     
                                    </div>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="'.$row['frontImage'].'" class="d-block w-100" alt="...">
                                      </div>';
                            if($row['endImage']!=""){
                                echo '<div class="carousel-item">
                                <img src="'.$row['endImage'].'" class="d-block w-100" alt="...">
                              </div>';
                            }
                                      
                            echo       '</div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                    </div>
                                    <div class="col-lg-6 container-fluid">
                                        <h2>'.$row['proName'].'</h2>

                                        <p>'.$row['description'].'</p>
                                    </div>
                                </div';
                         
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);
    }
    echo '</main>'



?>
<?php
    include '../partials/footer.php';
?>