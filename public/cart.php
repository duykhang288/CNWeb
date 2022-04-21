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
  </thead>
  <tbody scope="col" id="tb2"> 
  </tbody>
  <tfoot scope="col" id="tf1">    
  </tfoot>
</table>
</div>';


include '../partials/footer.php';
?>