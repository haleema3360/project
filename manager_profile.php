<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: manager_login.php");
    exit;
}
?>
<?php
include 'partial/dbconnect.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <style>.content {
	border: 1px;
	
	margin-top: 60px;
	margin-bottom: 50px;
	margin-right: 0px;
	margin-left: 250px;
    word-wrap: break-word;
    background-color:white;
}
* {
    list-style: none;
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

 .content .box {
	  padding: 10px;
	  width: 85%;
  
	  
	  

	  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;
  }
  h2{
    margin-left:100px;
  }
 .content .box.user-info {
  font-family: Arial, Helvetica, sans-serif;
  
  width: 100%;
}

.content .box .user-info td, .user-info th {
 
  padding: 15px;
}



.content .box.user-info th {
  padding-top: 8px;
  padding-bottom: 18px;
  text-align: left;
 

}
.content .box .heading{
font-family: Arial, Helvetica, sans-serif;
font-size: 30px;
}

.products {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.products td, .products th {
  border: 1px solid #ddd;
  padding: 3px;
}
.but {
color: white;
}




.products tr:hover {background-color: #ddd;}

.products th {
  padding-top: 15px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0D4C92;
  color: white;
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #0D4C92;
    margin-left: 900px;
    margin-bottom: 30px;
    
	
}
.btn-secondary{
  margin-left: 490px;
}
.namee{
  margin-left: 0px;
}
.pencil{
  margin-left: 860px;
    margin-bottom: 7px;
    position: absolute;
}


</style>

// <?php echo $_SESSION['username']?> 

    <title>Manager-Profile</title>
  </head>
  <body>

  <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
    
            <h2><?php echo $_SESSION['username']?></h2>
            <p>Manager</p>
            </div>
            <ul>
                <li>
                    <a href="manager_profile.php" class="active">
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="manager_products.php">
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="manager_porders.php">
                        
                        <span class="item">Product Orders</span>
                    </a>
                </li>
                <li>
                    <a href="manager_rawmaterials.php">
                        
                        <span class="item">Raw Materials Inventory</span>
                    </a>
                </li>
                
                <li>
                    <a href="manager_wip.php">
                        
                        <span class="item">WIP Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="manager_finishedg.php">
                        
                        <span class="item">Finished Goods Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="manager_mro.php">
                        
                        <span class="item">MRO Inventory</span>
                    </a>
                </li>
                
                <li>
                    
                        <a href="/project/logout.php"><span class="item">Signout</span></a>
                        
                    
                </li>
            
  </ul>
  
       </div>
</div>
   

  
<div class="content">
<h2><u>Profile</u></h2>

<div class="box">

<table class="user-info">
 <tr class="heading">
 
 
 
  	</tr>
    <tbody>
    <?php
  $sql = "SELECT * FROM `profile`";
  $result = mysqli_query($conn, $sql);
  ?>
    <?php
    if ($result) {
      
        while($row = mysqli_fetch_assoc($result)) {
          $name=$row['name'];
          $user_id=$row['user_id'];
          $username=$row['username'];
           
           $dob=$row['dob'];
             $gender=$row['gender']; 
             $designation=$row['designation'];
             $phone=$row['phone']; 
             $address=$row['address']; 
             echo '<tr class="pencil">

             <td><button type="button" class="btn btn-link">
                <a href="edit_manager_info.php?editid='.$user_id.'">  <span class="bi bi-pencil-fill"></span></a></button></td>
             </tr>
             <tr>
                <td>Name</td>
                <td>'.$row["name"].'</td>
                </tr>
                <tr>
                <td>User ID</td>
                 <td>'.$row["user_id"].'</td>
                 </tr>
                 <tr>
                 <td>User Name</td>
                 <td>'.$row["username"].'</td>
                 </tr>
                 <tr>
                 <td>Date of Birth</td>
                 <td>'.$row["dob"].'</td>
                 </tr>
                 <tr>
                 <td>Gender</td>
                  <td>'.$row["gender"].'</td>
                  </tr>
                  <tr>
                  <td>Designation</td>
                  <td>'.$row["designation"].'</td>
                  </tr>
                  <tr>
                  <td>Phone</td>
                  <td>'.$row["phone"].'</td>
                  </tr>
                  <tr>
                  <td>Address</td>
                  <td>'.$row["address"].'</td>
                  </tr>';
  }
}
?>
      
</tbody>
  

  
</table>
        </div>
        
</div>
</div>


  

    

</body>
</html>