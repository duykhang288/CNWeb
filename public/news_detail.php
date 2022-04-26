<?php
    include '../partials/header.php';
    if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
        echo $_GET['id'];
        include '../partials/mysqli_connect.php';
        $query = "SELECT * FROM news WHERE proID ='{$_GET['id']}'";
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo $row['title'].'<img src="'.$row['image'].'"'.$row['content'];
                         
                        
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