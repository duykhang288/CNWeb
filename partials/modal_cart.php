<?php

echo '<div class="modal fade bd-example-modal-xl" id="CartModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header border-bottom-0">
            <h1>Giỏ hàng của bạn</h1>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <div class="modal-body" id="modal_product">
            <table class="table table-fixed">
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
            </table>
        </div>
        <div class="modal-footer">
            <table class="table">
                <tfoot scope="col" id="tf1">    
                </tfoot>
            </table>
        </div>
    </div>
</div> 
</div>';

?>