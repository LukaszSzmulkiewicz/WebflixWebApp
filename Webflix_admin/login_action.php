<?php # PROCESS LOGIN ATTEMPT.

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Open database connection.
  require ( 'includes/connect_db.php' ) ;

  # Get connection, load, and validate functions.
  require ( 'login_tools.php' ) ;

  # Check login.
  list ( $check, $data ) = validate ( $link, $_POST[ 'email' ], $_POST[ 'pass' ] ) ;

  # On success set session data and display logged in page.
  if ( $check )  
  {
    # Access session.
    session_start();
    $_SESSION[ 'id' ] = $data[ 'id' ] ;
    $_SESSION[ 'first_name' ] = $data[ 'first_name' ] ;
    $_SESSION[ 'last_name' ] = $data[ 'last_name' ] ;
    $_SESSION[ 'dob' ] = $data[ 'dob' ] ;
    $_SESSION[ 'is_account_approved' ] = $data[ 'is_account_approved' ] ;

    # Display error message if account not approved or dashbord page
    if ($_SESSION[ 'is_account_approved' ]=='N'){
      echo '<div class="container">
		  <div class="alert alert-primary alert-dismissible fade show" style="background-color: #D50e0c;"role="alert">
		  <h1>Error!</h1>
		  <p id="err_msg" style="color: #FFFFFF;">The following error(s) occurred:<br>' ;
 
  echo '<hr>
		  <p class="mb-0" style="color: #FFFFFF;">Your account has not been approved by the senior management!</p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
		  </button>
		 </div>
		</div>';
    

    }else{
      load ( 'dashboard.php' ) ;
    }
  
    
  }
  # Or on failure set errors.
  else { $errors = $data; } 

  # Close database connection.
  mysqli_close( $link) ; 
}

# Continue to display login page on failure.
include ( 'login.php' ) ;

?>