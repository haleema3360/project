<?php
include 'partial/dbconnect.php';
$sku_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $sku_id= $_POST["sku_id"];
        $material=$_POST["material"];
        $type=$_POST["type"];
        $quantity=$_POST["quantity"];
        $units=$_POST["units"];
        $received_date=$_POST["received_date"];
          

        $sql = "UPDATE `raw_materials` SET sku_id='$sku_id',material='$material',type='$type',quantity='$quantity',units='$units',received_date='$received_date' WHERE sku_id='$sku_id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){
           
            echo"Data insrted";
            
            
            header("location: manager_rawmaterials.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>