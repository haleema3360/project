<?php
include 'partial/dbconnect.php';
$product_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $product_id= $_POST["product_id"];
        $product_name=$_POST["product_name"];
        $quantity=$_POST["quantity"];
        $unit=$_POST["unit"];
        $status=$_POST["status"];
          

        $sql = "UPDATE `porders` SET product_id='$product_id', product_name='$product_name',quantity='$quantity',unit='$unit',status='$status' WHERE product_id='$product_id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){
            
            echo"Data insrted";
            header("location: manager_porders.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>