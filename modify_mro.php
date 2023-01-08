<?php
include 'partial/dbconnect.php';
$part_no=$_GET['editid']; 

if(isset($_POST['update'])){
        $part_no= $_POST["part_no"];
        $part_name=$_POST["part_name"];
        $type=$_POST["type"];
        $machine=$_POST["machine"];
        $department=$_POST["department"];


       
        $sql = "UPDATE `mro` SET `part_no`='$part_no',`part_name`='$part_name',
`type`='$type',`machine`='$machine',`department`='$department' WHERE part_no='$part_no'";
          
          $result = mysqli_query($conn, $sql);
          if($result){
        
            header("location:admin_mro.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>