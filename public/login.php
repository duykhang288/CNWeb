<?php
define('TITLE', 'Đăng Nhập');
include '../partials/header.php';



 
if (isset($_POST['dangnhap'])) 
{

    include '../partials/mysqli_connect.php';
     

    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $loggedin = false;

    
     
    $password = md5($password);
     
    $query = mysqli_query($dbc,"SELECT username, Pass FROM account WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
 
    $row = mysqli_fetch_array($query);
     
    if ($password != $row['Pass']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    $_SESSION['username'] = $username;
    $loggedin = true;
   
    header("Refresh:0; url=index.php");
    
}
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

                                <form id="signupForm" form action="login.php?do=login" method="POST">
                                <h4 class="fw-bold mb-4" style="color: #92aad0;">Đăng Nhập Vào Tài Khoản</h4>
                               
                                <div class="form-outline mb-4">
                                    <input type="text" id="txtUsername" name="txtUsername" class="form-control" />
                                    <label class="form-label" for="txtUsername">Tên đăng nhập</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="tetPassword" name="txtPassword" class="form-control" />
                                    <label class="form-label" for="tetPassword">Mật khẩu</label>
                                </div>

                                <div class="d-flex justify-content-end pt-1 mb-4">
                                    <button  type="submit" name="dangnhap" class="btn btn-primary">Đăng nhập</button>
                                </div>
                                <hr>
                                <a class="link float-end mx-2" href="#!">Quên mật khẩu? </a>
                                <a class="link float-end" href="register.php">Đăng ký tài khoản</a>
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
    <?php
        include '../partials/footer.php'; 
    ?>
    	<script type="text/javascript" src="jquery.validate.js"></script>

        <script type="text/javascript" src="js/check.js"> </script>
    </body>
</html>