<?php
include 'partial/dbconnect.php';
$batch_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $batch_id= $_POST["batch_id"];
        $component=$_POST["component"];
        $workstation_from=$_POST["workstation_from"];
        $time_deposited=$_POST["time_deposited"];
        $sender=$_POST["sender"];
        $workstation_to=$_POST["workstation_to"];
        $time_picked=$_POST["time_picked"];
        $receiver=$_POST["receiver"];
          

        $sql = "UPDATE `wip` SET batch_id='$batch_id',component='$component',workstation_from='$workstation_from',time_deposited='$time_deposited',sender='$sender',
        workstation_to='$workstation_to',time_picked='$time_picked',receiver='$receiver' WHERE batch_id='$batch_id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){         
           header("location: manager_wip.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>