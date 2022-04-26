<?php

include '../partials/header.php';

include '../partials/mysqli_connect.php';

echo '<div   class="container skin-light">
<h1>GIỎ HÀNG</h1>
<table class="table">
  <thead scope="col">
      <tr>
          <th scope="col" colspan="2">
              Sản Phẩm
          </th>
          <th scope="col">
              Số lượng
          </th>
          <th scope="col">
              Giá
          </th>
          <th scope="col">
              Thành Tiền
          </th>
          <th scope="col">
          </th>
        </tr>
  </thead>
  <tbody scope="col">';

include '../partials/mysqli_connect.php';
$id=$_GET["id"];
$query = "SELECT * FROM products WHERE proID ='$id'";
            if ($result = mysqli_query($dbc, $query)){
                
                while ($row = mysqli_fetch_array($result)) {
                    
                    echo'<tr>
                    <th scope="col">
                        '.$row['frontImage'].'
                    </th>
                    <th scope="col">
                        '.$row['proName'].'
                    </th>
                    <th scope="col">
                        '.$row['price'].'
                    </th>
                    <th scope="col">
                        '.$row['quantity'].'
                    </th>
                    <th scope="col">
                        '.$row['price'].'
                    </th>
                    <th scope="col">
                        <a href="#" onclick="removeCart"><i class="fa fa-trash"> </i></a>
                    </th>
                  </tr>';
                
                }
            } else {
                echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                        '.</p><p>Câu truy vấn là: ' . $query . '</p>';
            }
            
            mysqli_close($dbc);
    

  echo'</tbody>
  <tfoot scope="col">  
            
  </tfoot>
</table>
</div>';


include '../partials/footer.php';
?>