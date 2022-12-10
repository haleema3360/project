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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
   <style>.content {
	border: 1px;
	
	margin-top: 40px;
	margin-bottom: 60px;
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
	  padding: 5px;
	  width: 85%;
	  
	  

	  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;
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
  padding: 8px;
}



.products tr:hover {background-color: #ddd;}

.products th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0D4C92;
  color: white;
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    
  background-color: #0D4C92;
  margin-left: 630px;
    margin-bottom: 7px;
  
}
.but {
color: white;
}

</style>

    

    <title>Products</title>
  </head>
  <body>

  <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
            <img src="user1.jfif" alt="profile_picture">
            <h2><?php echo $_SESSION['username']?></h2>
            <p>Admin</p>
            </div>
            <ul>
                <li>
                    <a href="admin_profile.php">
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="admin_products.php" class="active">
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="admin_porders.php">
                        
                        <span class="item">Product Orders</span>
                    </a>
                </li>
                <li>
                    <a href="admin_rawmaterials.php">
                        
                        <span class="item">Raw Materials Inventory</span>
                    </a>
                </li>
                 <!-- <li>
                    <a href="#">
                        
                        <span class="item">Raw Material Orders</span>
                    </a>
                </li> -->
                <li>
                    <a href="admin_warehouse.php">
                        
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
        
  <tr class="heading">
 <td> <h3><u>Products</u></h3></td>
 <td><button type="button" class="btn btn-primary"> <a class="but" href="add_product.php"> Add Product</a></button> </td>
  	</tr>
  
      <table class="products">
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Unit</th>
    <th>Product Status</th>
    <th>Edit</th>
  </tr>
  <tr>
    <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  <tr>
  <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  <tr>
  <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  <tr>
  <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  <tr>
  <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  <tr>
  <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  <tr>
  <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  <tr>
  <td>1001</td>
    <td>abc</td>
    <td>10</td>
    <td>Kg</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Procurement</button>
    <button class="dropdown-item" type="button">Manufacturing</button>
    <button class="dropdown-item" type="button">Warehousing </button>
    <button class="dropdown-item" type="button">Order Fulfillment </button>
    <button class="dropdown-item" type="button">Transportation </button>
  </div>
</div></td>
<td><button type="button" class="btn btn-link"> <a href="#">  <span class="bi bi-pencil-fill"></span></a></button></td>
  </tr>
  
  
</table>


</div>
        
</div>
</div>


  

    

  </body>
</html>