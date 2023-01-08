<?php
include 'partial/dbconnect.php';
$product_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $product_id= $_POST["product_id"];
        $product=$_POST["product"];
        $division=$_POST["division"];
        $type=$_POST["type"];
        $quantity=$_POST["quantity"];
        $client=$_POST["client"];
          $sql = "UPDATE `finished_goods` SET `product_id`='$product_id',`product`='$product',
          `division`='$division',`type`='$type',`quantity`='$quantity',`client`='$client' WHERE product_id='$product_id'";
          $result = mysqli_query($conn, $sql);
          if($result){
            echo"Data inserted";
            header("location: admin_finishedg.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>