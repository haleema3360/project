<?php
include 'partial/dbconnect.php';
$product_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $product_id= $_POST["product_id"];
        $product_name=$_POST["product_name"];
        $quantity=$_POST["quantity"];
        $unit=$_POST["unit"];
          

        $sql = "UPDATE products SET product_id='$product_id', product_name='$product_name',quantity='$quantity',unit='$unit' WHERE product_id='$product_id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){
            
            echo"Data insrted";
            
            
            header("location: manager_products.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>