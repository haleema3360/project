<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="style.css">
    <style>
        .content {
	border: 1px;
	
	margin-top: 80px;
	margin-bottom: 60px;
	margin-right: 0px;
	margin-left: 250px;
    word-wrap: break-word;
}
   

 .content .box {
	  padding: 5px;
	  width: 85%;
	  
	  
	  color:#fff;
	  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;">
  }
 .content .box.user-info {
  font-family: Arial, Helvetica, sans-serif;
  
  width: 100%;
}

.content .box .user-info td, .user-info th {
 
  padding: 15px;
}



.content .box.user-info th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
 
  color: white;
}
.content .box .heading{
font-family: Arial, Helvetica, sans-serif;
font-size: 30px;
}
    </style>

    

    <title>Welcome - <?php echo $_SESSION['username']?></title>
  </head>
  <body>

  <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
            <img src="user1.jfif" alt="profile_picture">
            <h2><?php echo $_SESSION['username']?></h2>
            <p>Programmer</p>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="#">
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="item">Product Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="item">Raw Material</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="item">Raw Material Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="item">Warehouse</span>
                    </a>
                </li>
                <li>
                    
                        <a href="/project/logout.php"><span class="item">Signout</span></a>
                        
                    
                </li>
            
  </ul>
  
       </div>
</div>

        
        <div class="content">
        <div class="box">
        <table class="user-info">
            hello
  <tr class="heading">
 <td> name</td>
  	</tr>
  
  <tr>
    <td>User ID</td>
    
    <td>Germany</td>
  </tr>
  <tr>
    <td>Username</td>
    
    <td>Sweden</td>
  </tr>
  <tr>
    <td>Date of Birth</td>
    
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Gender</td>
    
    <td>Austria</td>
  </tr>
  <tr>
    <td>Designation</td>
    
    <td>UK</td>
  </tr>
  <tr>
    <td>Phone Number</td>
    
    <td>Germany</td>
  </tr>
  <tr>
    <td>Address</td>
    
    <td>Canada</td>
  </tr>
  
</table>
        </div>
        
</div>
</div>


  

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
