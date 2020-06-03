<?php 
//session_unset();
//print_r($_SESSION);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Airbus.com</title>
	<style>
	
		html { 
			  background: url(aeroplane.jpg) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}
		
		body{
			 background:none;
		}
		
		#headercontainer{
			margin-top:40px;
			
			
		}
		
		.container{
			width:100%;
			white-space: nowrap;
			
		}
	</style>
  </head>
  <body>
    
		
	<div class="container">
	
		<nav class="navbar navbar-expand-lg navbar navbar navbar-dark bg-primary nav-fill w-100">
	  <a class="navbar-brand" href="#">SkyTraX</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
		  <li class="nav-item active">
			<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item active">
			<a class="nav-link" href="bookflight.php">Search flights <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="viewbookedflights.php">View Booked flights</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Contact Us</a>
		  </li>
		   <li class="nav-item">
			<a class="nav-link" href="login.php">Login</a>
		  </li>
		  </ul>
		  
		 		  
		
	  </div>
	  <ul class="navbar-nav mr-auto">
		  	<li class="nav-item">
			<a class="nav-link" href="logout.php?logout=1"><button class="btn btn-success" type="submit" id="logout">Log out</button></a>
		  </li>
		  </ul>
	</nav>
		<div id="headercontainer">
	  <h1>SkyTraX best airline</h1>
		  <h4>award winner <b>2020</b></h4>
	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	
		
  
  </body>
</html>