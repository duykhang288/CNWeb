<?php 
    include '../partials/mysqli_connect.php';
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=$_GET['id']; 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
              
            $sql_s="SELECT * FROM products 
                WHERE proID={$id}"; 
            $query_s=mysqli_query($dbc, "SELECT * FROM products 
            WHERE proID='$id'"); 
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s=mysqli_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['proID']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
                  
            }else{ 
                  
               echo 'loi';
               exit();
                  
            } 
              
        } 
          
    } 
  
?>
