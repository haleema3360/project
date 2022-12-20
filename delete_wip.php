<?php 
 include 'partial/dbconnect.php';
 if(isset($_GET['deleteid'])){
    $batch_id=$_GET['deleteid'];
    $sql="DELETE FROM `wip` WHERE batch_id='$batch_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            // header("location: admin_products.php");
            // 
            echo"Delete successful";
            
            
            header("location:admin_wip.php");
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>