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
	<?php # DISPLAY COMPLETE LOGIN PAGE.


 include ( 'includes/header_login.php' ) ;

# Set page title and display header section.
$page_title = 'Login' ;
# Reads the navigation before reading the rest of the page
#include ( 'includes/header_reg.html' ) ;

/* The $errors array will only be set by the PHP
handler script after the form has been submitted
Display any error messages if present.*/

if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>
<div class="container">
<div class="wrapper fadeInDown">
<h1 class="text-center" style="color:#D50e0c;">Sign in</h1> 
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form action="login_action.php" method="post">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email" required>
      <input type="password" id="pass" class="fadeIn second" name="pass" placeholder="password"required>
      <input type="submit" class="fadeIn fourth" value="Sign In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgot_pass.php" style="color:#181414;">Forgot Password?</a>
    </div>

  </div>
</div>
</div>

<hr>


<?php
# including footer file
include ( 'includes/footer.php' ) ;

?>
