<?php 
 include 'partial/dbconnect.php';
 if(isset($_GET['deleteid'])){
    $product_id=$_GET['deleteid'];
    $sql="DELETE FROM `products` WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            // header("location: admin_products.php");
            // 
            echo"Delete successful";
            
            
            header("location:admin_products.php");
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>