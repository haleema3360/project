<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/loginsystem">
  <img width="150px" height="50px"src="NW-Logo.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>';
  if(!$loggedin){
    echo '
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/project/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/project/signup.php">Signup</a>
      </li>';}
      if($loggedin){
        echo '
        <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/project/logout.php">Logout</a>
      </li> ';
      }
    echo'</ul>
  </div>
</nav>';
?>
