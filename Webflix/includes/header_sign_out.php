<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webflix</title>
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/custom.css">
    
  </head>
  <body style= "background-color:#181414;">
    
<header>
<?php # DISPLAY COMPLETE LOGGED OUT PAGE.
 

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

?>
	<!-- Navigation bar -->	
<nav class="navbar navbar-expand-lg" style= "background-color:#181414;">
<a class="navbar-brand" href="user_login.php">
     <h1 class="display-3 mb-auto"style="color: #D50e0c;"><b>Webflix</b></h1>
   </a>
   <button class="navbar-toggler" style= "background-color: #181414; border: solid 1px #D50e0c;" type="button" data-toggle="collapse" 
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:#D50e0c; font-size:28px; padding-top:2px;"></i></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <div class="col">
    
    <ul class="navbar-nav mr-auto">

    <li class="nav-item">
        <a class="nav-link text-white" href="user_login.php">
        <h5 class=>Home</h5>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="films.php">
        <h5>Films</h5>
        </a>
      </li>
	   <li class="nav-item">
        <a class="nav-link text-white" href="tv_shows.php"><h5>TV Shows</h5></a>
      </li>
  
	  <li class="nav-item">
        <a class="nav-link text-white" href="sign_out.php"><h5>Sign Out</h5></a>
      </li>
	 	</ul>

  </div>
 
</nav><
</header>
