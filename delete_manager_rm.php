<?php 
 include 'partial/dbconnect.php';
 if(isset($_GET['deleteid'])){
    $sku_id=$_GET['deleteid'];
    $sql="DELETE FROM `raw_materials` WHERE sku_id='$sku_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            // header("location: admin_products.php");
            // 
            echo"Delete successful";
            
            
            header("location:manager_rawmaterials.php");
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>