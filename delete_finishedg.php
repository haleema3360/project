<?php 
 include 'partial/dbconnect.php';
 if(isset($_GET['deleteid'])){
    $product_id=$_GET['deleteid'];
    $sql="DELETE FROM `finished_goods` WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            
            echo"Delete successful";
            
            
            header("location:admin_finishedg.php");
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>