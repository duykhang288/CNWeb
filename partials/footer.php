<!-- END CHANGEABLE CONTENT. -->
<?php

if ( (is_administrator() && (basename($_SERVER['PHP_SELF']) != 'logout.php'))
		|| ! (empty($loggedin)) ) {

	echo '<hr><p><a href="add_quote.php">Thêm Trích dẫn</a> <->
	<a href="view_quotes.php">Xem tất cả Trích dẫn</a> <->
	<a href="logout.php">Đăng xuất</a></p>';

} else {
	echo '<hr><p><a href="/">Trang chủ</a> <-> <a href="login.php">Đăng nhập</a></p>'; 
}

?>
	</div><!-- container -->
	<div id="footer">Content &copy; 2022</div>
</body>
<footer>
            <div class="container-fluid"> 
                <div class="row text-center d-flex align-items-center h-25 justify-content-center" style="background-color:rgb(238, 238, 238)">
                    <div class="col-lg-3">
                        Tin Mới
                    </div>
                    <div class="col-lg-3">
                        Sự Kiện
                    </div>
                    <div class="col-lg-3">
                        Khuyến mãi
                    </div>
                    <div class="col-lg-3">
                        Video 
                    </div>
                
                </div>
                <div class="row h-80 text-lg-left text-center d-flex align-items-center justify-content-center" style="background-color: rgba(245, 245, 245, 0.699);">
                    <div class="col-lg-3">
                        <h5>Thông Tin Khác</h5>
                        <p>Bản quyền</p>
                        <p>Giấy phép kinh doanh</p>
                        <p>Liên hệ quảng cáo</p>
                        <p>Nội quy </p>

                    </div>
                    <div class="col-lg-3">
                         <h5>Các Đơn vị Giao Hàng </h5>
                         <p>Giao hành nhanh</p>
                        <p>J&T</p>
                        <p>Viettel Post</p>
                      
                    </div>
                    <div class="col-lg-3">
                        <h5>Theo dõi </h5>
                        <a href=""> <p><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook  </p></a>
                        <a href=""><p><i class="fa fa-twitter"></i> Twitter  </p> </a>
                        <a href="pinterest.com" class="a">
                           <p><i class="fa fa-pinterest"></i> Pinterest  </p>
                        </a>
                        <a href=""><p><i class="fa fa-telegram" aria-hidden="true"></i> Telegram  </p> </a>
                    </div>
                    
                
                </div>
                <div class="text-lg-center" style="background-color: rgba(230, 230, 230, 0.699);"> 
                <p>&#169 2021 Bản quyền thuộc về .
                    
                </p> </div>
        </div>
        <a  href="#logo" class="top">
            <img src="images/top-alignment.png" height="40px" width="40px" >
        </a>
        <a  class="btn position-fixed " id="help" data-toggle="modal" data-target="#helpmodal" >
            <div class="container">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
            </div>
        </a>
        </footer>
</html>