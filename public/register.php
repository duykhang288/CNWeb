<?php
define('TITLE', 'Đăng Ký');
include '../partials/header.php';
?>

        <section class="intro mt-4">
            <div class="bg-image h-100">
                <div class="mask d-flex align-items-center h-100 " >
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-9 col-xl-8">
                        <div class="card shadow border-0" style="border-radius: 1rem;">
                        <div class="row g-0">
                        
                            <div class="col-md-8 d-flex align-items-center ">
                            <div class="card-body py-5 px-4 p-md-5">

                                <form id="signupForm" form action="request.php" method="POST">
                                <h4 class="fw-bold mb-4" style="color: #92aad0;">Đăng Ký Tài Khoản</h4>
                               
                                <div class="form-outline mb-4">
                                    <input type="text" id="txtUsername" name="txtUsername" class="form-control" />
                                    <label class="form-label" for="txtUsername">Tên đăng nhập</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="txtPassword" name="txtPassword" class="form-control" />
                                    <label class="form-label" for="txtPassword">Mật khẩu</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" />
                                    <label class="form-label" for="confirm_password">Nhập lại mật khẩu</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" id="txtEmail" name="txtEmail" class="form-control" />
                                    <label class="form-label" for="txtEmail">Email</label>
                                </div>
                                <div class="d-flex justify-content-end pt-1 mb-4">
                                    <button  type="submit" name="dangnhap" class="btn btn-primary">Đăng ký</button>
                                </div>
                                <hr>
                                <p class="link float-end">Đã có tài khoản ? <a  href="login.php">Đăng nhập ngay</a> </p>
                                </form>

                            </div>
                            </div>
                            <div class="col-md-4 d-none d-md-block">
                            <img
                                src="https://i.imgur.com/oChMDsH.jpg"
                                alt="login form"
                                class="img-fluid" style="border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;"
                            />
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </body>
    <script type="text/javascript" src="jquery.validate.js"></script>
    <script type="text/javascript" src="js/checkregister.js"> </script>
</html>