<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

include __DIR__ . '/../functions.php'; ?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="https://i.imgur.com/2gF16Sg.png" rel="icon" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" href="css/test.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/9ba9acccf1.js" crossorigin="anonymous"></script>
	<title><?php
	if (defined('TITLE')) {
		echo TITLE;
	} else {
		echo 'Trang Chủ';
	}
	?></title>
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light  shadow-sm">
  	<div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://i.imgur.com/2gF16Sg.png" alt="logo" style="height:57px; width: 73px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      
      </ul>
	  <form class="d-flex mx-1">
        <input class="form-control me-2" type="search" placeholder="Tìm Kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
	  <div class="d-flex mx-1">
	  
	  	<a type="button" class="btn position-relative">
		  	<i class="fa-solid fa-bell"></i>
			<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
				99+
				
			</span>
		</a>
	  </div>
	  <div class="d-flex mx-1">
		<?php
			
			if (isset($_SESSION['username']) && $_SESSION['username']){
				echo '<a type="button" class="btn  position-relative">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					  99+
					 
				  </span>
			  </a>';
				
				
			}
			
			?>
	  		
	  </div>
	  <div class="d-flex  mx-2">
		
	  <?php
		
		if (isset($_SESSION['username']) && $_SESSION['username']){

			echo '	<div class="dropdown">
			<a class="btn  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				
				 ' ;
			echo '<i class="fa-solid fa-user"></i> '.$_SESSION['username'];
				
			echo '</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="#">Thông tin <i class="fa-solid fa-circle-info"></i></a></li>
				<li><a class="dropdown-item" href="#">Đơn hàng <i class="fa-solid fa-chart-simple"></i></a></li>
				<li><a class="dropdown-item" href="logout.php">Đăng xuất <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
			</ul>
			</div>';
			
		}
		else{
			echo '<a href="login.php">Đăng nhập</a>';
		}
		?>
	  </div>
      
    </div>
  </div>
</nav>
	</header>