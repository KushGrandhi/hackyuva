<?php
 require 'config/config.php';

 if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>
<html>
<head>
 <title>Social Site</title>
 
 <link rel='shortcut icon' href='assets/images/icons/lips.jpg' /> 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="assets/js/bootstrap.js"></script>
 
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="assets/css/style.css">
 
</head>
<body>
   
<nav class="navbar navbar-light" style="background-color: #f7347a;"> 
<div>
<a class="navbar-brand" style="color: white;">LOGO</a>
  

   
   </div>
  <form class="form-inline" >
  <a href="" ><i style="color: white; margin:0px 10px; font-size:20px; font-weight: bold;"> <?php
    echo $user['first_name'];
  ?></i>
 
  </a>
  <a href=""><i class="fa fa-home " style="color: white; margin:0px 10px; font-size:24px; "></i></a>
<a href=""><i class="fa fa-envelope " style="color: white; margin:0px 10px; font-size:24px; "></i></a>
<a href=""><i class="fa fa-bell-o" style="color: white; margin:0px 10px; font-size:24px; "></i></a>
<a href=""><i class="fa fa-users " style="color: white; margin:0px 10px; font-size:24px; "></i></a>

    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	<a href=""><i class="fa fa-gear " style="color: white; margin:0px 10px; font-size:24px; "></i></a>
	<a href=""><i class="fa fa-sign-out " style="color: white; margin:0px 10px; font-size:24px; "></i></a>
  </form>
  
  
</nav>
 </body>
