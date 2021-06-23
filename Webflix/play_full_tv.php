<?php # DISPLAY SHOPPING CART ADDITIONS PAGE.

# Access session.
session_start();


# Set page title and display header section.
$page_title = 'Play Full TV' ;
include ( 'includes/header_sign_out.php' ) ;

# checking the user's date of birth
if ( $_SESSION['member_type'] == 'free') {
  $day = substr($_SESSION['dob'],8); 
	$month =  substr($_SESSION['dob'],5,2);
	$year =  substr($_SESSION['dob'],0,4);

	$dob = $year."-".$month."-".$day;

  $seconds = mktime(0,0,0, $month, $day, $year);
	# substract the differance between now and dob in seconds
	$differance = time() - $seconds;
	# devide the differance by seconds in the year to get the age
	$age = floor($differance/31536000); 

  # display error message if user under age
  if($age<18)
  {
    echo '<div class="container">
		  <div class="alert alert-primary alert-dismissible fade show" style="background-color: #D50e0c;"role="alert">
		  <h1>Error!</h1>
		  <p id="err_msg" style="color: #FFFFFF;">The following error(s) occurred:<br>' ;
 
  echo '<hr>
		  <p class="mb-0" style="color: #FFFFFF;">You must be 18, to watch the full content!.</p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
		  </button>
		 </div>
		</div>';
  }
  else
  {
    header('Location: subscription_signed_in.php');
  }
} 
else
{

# Get passed movie id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

# Open database connection.
require ( 'includes/connect_db.php' ) ;

# Retrieve selective item data from 'tv_shows_webflix' database table. 
$q = "SELECT * FROM tv_shows_webflix WHERE tv_id = $id" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

 
	
    echo '<h1 class="text-center display-4" style="color:#fff">'.$row['tv_title'].'</h1> 
    <div class="container">
    

    <div class="embed-responsive embed-responsive-16by9">
     <iframe class="embed-responsive-item" src=" '.$row['tv_link'].' " allowfullscreen ></iframe>
    </div>
    </div> ';
  }


# Close database connection.
mysqli_close($link);
}
?>

 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>