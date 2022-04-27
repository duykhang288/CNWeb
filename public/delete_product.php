<?php
include '../partials/mysqli_connect.php';
    $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";
    $id=$_GET["id"];
    echo $id;
    // mysqli_query($dbc," DELETE FROM products WHERE proID=.$id ");
    
    // header("Location:admin_products.php");
?>