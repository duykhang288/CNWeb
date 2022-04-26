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