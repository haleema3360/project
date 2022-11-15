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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
  <?php require 'partial/nav.php' ?>

  <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
            <img src="user.jfif" alt="profile_picture">
            <h3><?php echo $_SESSION['username']?></h3>
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
                    <a href="#">
                        
                        <span class="item">Signout</span>
                    </a>
                </li>
            
  </ul>
  
       </div>
        
    </div>
  

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
