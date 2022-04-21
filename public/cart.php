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
$query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";
$queryC = "SELECT * FROM cart WHERE proID ='{$_GET['id']}'";
            if ($result = mysqli_query($dbc, $queryC)){
                
                while ($row = mysqli_fetch_array($result)) {
                    
                    echo'<tr>
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