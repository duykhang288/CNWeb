<?php
    include '../partials/header.php';
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     
    include '../partials/mysqli_connect.php';
          
          
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    
          
   
          
        
        $password = md5($password);
        echo "<p>$password </p>";
          
    if (mysqli_num_rows(mysqli_query($dbc,"SELECT username FROM account WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          

    if (mysqli_num_rows(mysqli_query($dbc,"SELECT Mail FROM account WHERE Mail='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
          
    @$addmember = mysqli_query($dbc,
    "INSERT INTO account (Username, Pass, Mail)
VALUES ('$username', '$password', '$email')");
    if ($addmember){

    
    
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    }
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
?>