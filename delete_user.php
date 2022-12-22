<?php 
 include 'partial/dbconnect.php';
 if(isset($_GET['deleteid'])){
    $user_id=$_GET['deleteid'];
    $sql="DELETE FROM `user` WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            
            header("location:admin_empmanage.php");
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>