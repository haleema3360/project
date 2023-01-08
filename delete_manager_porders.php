<?php 
 include 'partial/dbconnect.php';
 if(isset($_GET['deleteid'])){
    $product_id=$_GET['deleteid'];
    $sql="DELETE FROM `porders` WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            // header("location: admin_products.php");
            // 
            echo"Delete successful";
            
            
            header("location:manager_porders.php");
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>

