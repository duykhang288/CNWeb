<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

include __DIR__ . '/../functions.php'; ?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title><?php
	if (defined('TITLE')) {
		echo TITLE;
	} else {
		echo 'Trang chủ';
	}
	?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <script src="https://kit.fontawesome.com/3ed1709a9a.js" crossorigin="anonymous"></script>
        <script src="js/jquery-3.6.0.min.js"></script>      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>     
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
</head>
<body>
    <header class="container"> 
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-light navbar-expand-lg" >
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">      
                            <li class="nav-item  " >
                                <a class="nav-link active" aria-current="page" href="sanpham.html">Trang Chủ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Loại
                                </a>
                                <div class="dropdown-menu shadow" id="dropdowntl" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item droptl" href="#">Apple</a>
                                <a class="dropdown-item droptl" href="#">Samsung</a>
                                <a class="dropdown-item droptl" href="#">Huawei</a>
                                <a class="dropdown-item droptl" href="#">Sony</a>
                                <a class="dropdown-item droptl" href="#">XIAOMI</a>
                                <a class="dropdown-item droptl" href="#">OPPO</a>        
                            </li>
                            <li class="nav-item " >
                                <a class="nav-link active" aria-current="page" href="#">Tin Tức</a>
                            </li>
                            </ul>
                            <form class="form-inline  my-2 my-md-0">
                                <input class="form-control mr-lg-2" id="stop" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                                <a class="btn text-primary my-2 my-lg-0" onclick="searchcheck()"><i class="fas fa-search"></i></a>
                            </form>
                            <a type="button" class="d-grid ml-3" style="margin-left: 30px; margin-right: 10px;"><i class="fa fa-bell text-primary" aria-hidden="true"></i></a>                      
                            <a class="d-grid m-3" href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <a class="d-grid m-3" href="giohang.html"> <i class="fa fa-shopping-cart text-primary"  aria-hidden="true"></i></a>
                        </div>
                    </div>
                </nav> 
            </div>    
        </div>                   
    </header>
		
 		<!-- BEGIN CHANGEABLE CONTENT. -->