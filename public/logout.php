<?php

define('TITLE', 'Logout');
include '../partials/header.php';

if (isset($_SESSION['username'])){
    unset($_SESSION['username']); 
}

echo '<p>Bạn đã đăng xuất.</p>';
header("Refresh:0; url=index.php");
include '../partials/footer.php';
?>