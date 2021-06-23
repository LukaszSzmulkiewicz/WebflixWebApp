<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/login.css">

    <title>Webflix</title>
  </head>
  <body>
	<?php 

# Set page title and display header section.
 include ( 'includes/header_sign_in.php' ) ;


$page_title = 'Password reset' ;


# Displaying message to the user after form submition
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
    echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="p-2 bd-highlight col-example">
    <div class="card border-dark">
       <div class="card-body">
       <h6 style="color:#181414;">Password reset link has been sent</h6>
       <h6 style="color:#181414;">Please check your mailbox and folow the instructions</h6>
       <a href="index.php"  
       class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
      
       </div>
       </div>
       </div>';
        $db->close();

}


?>
<div class="container">
<div class="wrapper fadeInDown">
<h1 class="text-center" style="color:#D50e0c;">Forgotten your password?</h1> 
<h6 class="text-center"style="color:#181414;"> Simply enter your email address below and we'll send you a link to reset it.</h6>
  <div id="formContent">
   

    <!-- Forgot Password Form -->
    <form action="forgot_pass.php" method="post">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email" required>
     
      <input type="submit" class="fadeIn fourth" value="Submit">
    </form>


  </div>
</div>
</div>

<hr>


<?php
# including footer file
include ( 'includes/footer.php' ) ;

?>