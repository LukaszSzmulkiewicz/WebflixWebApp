<!doctype html>
<html lang="en">


<?php # DISPLAY COMPLETE REGISTRATION PAGE.


include ( 'includes/header_sign_in.php' ) ;

$postedData = $_SESSION['formPostData'];


# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
# Connect to the database.
require ('includes/connect_db.php'); 

# Initialize an error array.
$errors = array();

# Check for a first name.
if ( empty( $_POST[ 'first_name' ] ) )
{ $errors[] = 'Enter your first name.' ; }
else
{ $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

# Check for a last name.
if (empty( $_POST[ 'last_name' ] ) )
{ $errors[] = 'Enter your last name.' ; }
else
{ $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

# Check for a date of birth.

if (empty( $_POST[ 'dd' ] ) || !(preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])$/",$_POST[ 'dd' ])) 
|| empty( $_POST[ 'mm' ] ) || !(preg_match("/^(0[1-9]|1[0-2])$/",$_POST[ 'mm' ]))||
empty( $_POST[ 'yyyy' ] ) || !(preg_match("/^[0-9]{4}$/",$_POST[ 'yyyy' ])))
{ $errors[] = 'Enter your date of birth in the given format (dd-mm-yyyy).' ; }
else
{ 
	
	$day = $_POST[ 'dd' ]; 
	$month =  $_POST[ 'mm' ] ;
	$year =  $_POST[ 'yyyy' ] ;

	$dob = $year."-".$month."-".$day;

}

# Check for an email address:
if ( empty( $_POST[ 'email' ] ) )
{ $errors[] = 'Enter your email address.'; }
else
{ $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

# Check for a password and matching input passwords.
if ( !empty($_POST[ 'pass1' ] ) )
{
  if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
  { $errors[] = 'Passwords do not match.' ; }
  else
  { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass1' ] ) ) ; }
}
else { $errors[] = 'Enter your password.' ; }


# Check for an email address:
    if ( empty( $_POST[ 'email' ] ) )
    { $errors[] = 'Enter your email address.'; }
    else
    { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }
    
# Check for contact number
if ( empty( $_POST[ 'contact_number' ] ) || (is_numeric($_POST[ 'contact_number' ])==0)) 
{ $errors[] = 'Enter your contact_number'; }
else
{ $cn = mysqli_real_escape_string( $link, trim( $_POST[ 'contact_number' ] ) ) ; }    

# Check for contact number
if ( empty( $_POST[ 'country' ] ) )
{ $errors[] = 'Enter your country'; }
else
{ $ct = mysqli_real_escape_string( $link, trim( $_POST[ 'country' ] ) ) ; }    

# Check if email address already registered.
if ( empty( $errors ) )
{
  $q = "SELECT id FROM users_webflix WHERE email='$e'" ;
  $r = @mysqli_query ( $link, $q ) ;
  if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a href="login.php" style="color:#285873">Login</a>' ;
}
# On success register user inserting into 'users' database table.
if ( empty( $errors ) ) 
{
  $q = "INSERT INTO users_webflix (first_name, last_name, dob, email, pass, contact_number, country, join_date, member_type) 
  VALUES ('$fn', '$ln', '$dob','$e', SHA2('$p',256), '$cn', '$ct', NOW(), 'free')";
  $r = @mysqli_query ( $link, $q ) ;
  if ($r)
  { 

	# age validation:

	$seconds = mktime(0,0,0, $month, $day, $year);
	# substract the differance between now and dob in seconds
	$differance = time() - $seconds;
	# devide the differance by seconds in the year to get the age
	$age = floor($differance/31536000); 
    	# display appropriate page depending on the user's age
	  if($age > 18)
	  {
		header('Location: subscription.php'); 


	  }
	  else
	  {
	  header('Location: login_under_age.php');

	  }
  }

  # Close database connection.
  mysqli_close($link); 

  exit();
}
# Or report errors.
else 
{
  echo '<div class="container">
		  <div class="alert alert-primary alert-dismissible fade show" style="background-color: #D50e0c;"role="alert">
		  <h1>Error!</h1>
		  <p id="err_msg" style="color: #FFFFFF;">The following error(s) occurred:<br>' ;
  foreach ( $errors as $msg )
  { echo " - $msg<br>" ; }
  echo '<hr>
		  <p class="mb-0" style="color: #FFFFFF;">Please try again.</p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
		  </button>
		 </div>
		</div>';
  # Close database connection.
  mysqli_close( $link );
}  
}
?>  
<!--Registration Form -->
<h1 class="text-center display-4" style="color:#D50e0c;">Registration form </h1> 
<hr>
<div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="register.php" method="post">

<div class="row">
<div class="form-group">
<label for="first_name"style="color:#181414;">First Name</label>
<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" size="40" 
value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"required>
</div>
	
<div class="form-group">
<label for="last_name"style="color:#181414;">Last Name</label>
<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" size="40" 
value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"required>

</div>
</div>

<div class="row">
<div class="form-group">
<label for="contact_number"style="color:#181414;">Contact Number</label>
<input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" size="40" 
value="<?php if (isset($_POST['contact_number'])) echo $_POST['contact_number']; ?>"required>
</div>
			
<div class="form-group">
<label for="DateOfBirth"style="color:#181414;">Date Of Birth (dd-mm-yyyy)</label>
<div class="row">
<div class="col-sm">
<input type="text" class="form-control" id="dd" name="dd" placeholder="DD" size="5" 
value="<?php if (isset($_POST['dd'])) echo $_POST['dd']; ?>"required>
</div>
<div class="col-sm">
<input type="text" class="form-control" id="mm" name="mm" placeholder="MM" size="5" 
value="<?php if (isset($_POST['mm'])) echo $_POST['mm']; ?>"required>
</div>
<div class="col-sm">
<input type="text" class="form-control" id="yyyy" name="yyyy" placeholder="YYYY" size="5" 
value="<?php if (isset($_POST['yyyy'])) echo $_POST['yyyy']; ?>"required>
</div>
</div>
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="country"style="color:#181414;">Country</label>
<input type="text" class="form-control" id="country" name="country" placeholder="Enter Your Country" size="40" 
value="<?php if (isset($_POST['country'])) echo $_POST['country']; ?>"required>
</div>
				
<div class="form-group">
<label for="email"style="color:#181414;">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" size="40" 
value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="password"style="color:#181414;">Create Password</label>
<input type="password" class="form-control" id="pass1" name="pass1" placeholder="Create Password"size="40" 
value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required>
</div>
		
<div class="form-group">
<label for="confirm_password"style="color:#181414;">Confirm Password</label>
<input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password" size="40" 
value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"required>
</div>
</div>

<input type="checkbox" name="tc" value="ok" require>
    I accept the T&amp;C<br>
    <a class="underlineHover" style="color:#181414;" href="#">View terms & conditions.</a>
 
<hr>
<div class="input-group justify-content-center">
<input class="btn btn-dark btn-lg" type="submit" style="background-color: #D50e0c;" value="Register Now">      	
<a href="index.php" class="btn btn-dark btn-lg" style="background-color: #D50e0c;">Cancel</a>		  
</div>

</form><!--Closing Form -->
</div>
</div>
<hr>

<?php
# including footer file
include ( 'includes/footer.php' ) ;

?>