<?php
# Starting a session, adding the header and database conneciton files.
session_start() ;
 include ( 'includes/header_sign_out.php' ) ;
 require ( 'includes/connect_db.php' ) ;
 ?>

<?php

// getting the item id passed on through previous page
  if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
 
  } else {
    echo "Unable to display user detials";
  }

  if (isset($_POST['submit'])) {
    // assigning form variables to variables used for the SQL code    
    $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ); 
    $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ); 
    $dob = mysqli_real_escape_string( $link, trim( $_POST[ 'dob' ] ) ); 
    $country = mysqli_real_escape_string( $link, trim( $_POST[ 'country' ] ) ); 
    $email = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) );
    $number = mysqli_real_escape_string( $link, trim( $_POST[ 'contact_number' ] ) );
    $status = mysqli_real_escape_string( $link, trim( $_POST[ 'account_status' ] ) );
  
        // SQL code to handle the users_webflix update
      $q = "UPDATE users_webflix SET first_name='$fn', last_name= '$ln', dob= '$dob', email= '$email', 
      contact_number= '$number', country= '$country', account_status='$status'
      WHERE id='$id'"; 
    
         // message displayed after submition
      $r = mysqli_query ( $link, $q ) ;
      echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
      <div class="p-2 bd-highlight col-example">
      <div class="card border-dark">
         <div class="card-body">
         <h2>User details updated.</h2>
         <a href="dashboard.php"  
         class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
        
         </div>
         </div>
         </div>';
      $db->close();
   
  } else {
      // SQL code to pull data from the table
    $q = "SELECT * FROM users_webflix WHERE id = $id" ;
    $r = mysqli_query( $link, $q ) ;
    if ( mysqli_num_rows( $r ) == 1 )
    {
      $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

        $fn = $row['first_name'];
        $ln = $row['last_name'];
        $dob = $row['dob'];
        $country = $row['country'];
        $email = $row['email'];
        $number = $row['contact_number'];
        $status = $row['account_status'];
      
    }
    else 
    {
     echo "Undabe to destply user details!";

    }

  # Close database connection.
mysqli_close($link);
  }
?>
<!--Edit User Form -->
<h1 class="text-center display-4" style="color:#D50e0c;">Edit User </h1> 


<div class="d-flex align-items-center justify-content-center">
    <div class="p-2 bd-highlight col-example">

 <div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="#" method="post">
<hr>
<div class="row">
<div class="form-group">
<label for="firstname"style="color:#285873;">First Name</label>
<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" size="40" 
value="<?php echo htmlspecialchars($fn, ENT_QUOTES);?>"require>
</div>
	
<div class="form-group">
<label for="last_name"style="color:#285873;">Last Name</label>
<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" size="40" 
value="<?php echo htmlspecialchars($ln, ENT_QUOTES);?>">

</div>
</div>
			
<div class="row">
<div class="form-group">
<label for="dob"style="color:#285873;">Date Of Birth (yyyy-mm-dd)</label>
<input type="text" class="form-control" id="dob" name="dob" placeholder="Date Of Birth" size="40" 
value="<?php echo htmlspecialchars($dob, ENT_QUOTES);?>">
</div>
</div>

	
<div class="row">
<div class="form-group">
<label for="country"style="color:#285873;">Country</label>
<input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" size="40" 
value="<?php echo htmlspecialchars($country, ENT_QUOTES)?>">
</div>
</div>
				
<div class="form-group">
<label for="email"style="color:#285873;">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" size="40" 
value="<?php echo htmlspecialchars($email, ENT_QUOTES)?>">
</div>


<div class="row">
<div class="form-group">
<label for="contact_number"style="color:#285873;">Contact Number</label>
<input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" size="40" 
value="<?php echo htmlspecialchars($number, ENT_QUOTES)?>"require>
</div>
</div>

<div class="form-group">
<label for="account_status"style="color:#285873;">Account Status</label>
<input type="text" class="form-control" id="account_status" name="account_status" placeholder="Account Status" size="40" 
value="<?php echo htmlspecialchars($status, ENT_QUOTES)?>"require>
</div>
</div>

<hr>	
<div class="row justify-content-center">
<div class="form-group">
<input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" style="background-color: #D50e0c;" value="Submit">
<a href="dashboard.php"  class="btn btn-dark btn-lg btn-block" style="background-color: #D50e0c;">Cancel</a>
</div>
</div>
		
</form><!--Closing Form -->
</div>
</div>
</div>
</div>