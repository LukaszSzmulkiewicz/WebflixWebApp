<!doctype html>
<html lang="en">
<?php    
# adding header and database connection files 
include( 'includes/header_sign_out.php' ) ;
require ( 'includes/connect_db.php' ) ;
?>

 <div class="container">
     <h2 style="color:white">Popular on Webflix <h2>
     <hr>
 <div class="container">
  <div class="row">
      
<?php  
# Retrieve data from 'movies_webflix' database table.
$q = "SELECT * FROM movies_webflix WHERE cat_id=2" ;

# Mysqli_query function performs a query against a database.
	$r = mysqli_query( $link, $q ) ;
    # 5. The mysqli_num_rows() function returns the number of rows in a result set. 
	if ( mysqli_num_rows( $r ) > 0 )
	{
/* mysql_fetch_array — Fetch a result row as an associative array, a numeric array, or both.
   Returns an array of strings that corresponds to display body section.
*/
 
	while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
	{

	echo '
    <div class="col-sm d-flex justify-content-center">
    <div class="card shadow-lg p-3 mb-5" style="width: 12rem; background-color: #181414;">
    <img src="'. $row['mov_image'].'" class="card-img-top" alt="'.$row['mov_title'].'">
     <div class="card-body">


   <a href="view_mov.php?id='.$row['mov_id'].'"  class="btn btn-dark btn-block" style="background-color: #D50e0c;">See details</a>
   
  </div>
  
</div>
</div>

		
	';
			 }

	}
# Or display message if no data is found.
	else { echo '<p>There are currently no items to show.</p>' ; }
	?>
  </div>
</div>

<h2 style="color:white">Recently added <h2>
     <hr>
 <div class="container">
  <div class="row">
  <?php  
# Retrieve data from 'movies_weblix' database table.
$q = "SELECT * FROM movies_webflix WHERE cat_id=4" ;

# Mysqli_query function performs a query against a database.
	$r = mysqli_query( $link, $q ) ;
    # 5. The mysqli_num_rows() function returns the number of rows in a result set. 
	if ( mysqli_num_rows( $r ) > 0 )
	{
/* mysql_fetch_array — Fetch a result row as an associative array, a numeric array, or both.
   Returns an array of strings that corresponds to display body section.
*/
 
	while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
	{

	echo '
	<div class="col-sm d-flex justify-content-center">
    <div class="card shadow-lg p-3 mb-5" style="width: 12rem; background-color: #181414;">
    <img src="'. $row['mov_image'].'" class="card-img-top" alt="movie">
     <div class="card-body">


   <a href="view_mov.php?id='.$row['mov_id'].'"  class="btn btn-dark btn-block" style="background-color: #D50e0c;">See details</a>
   
  </div>
  
</div>
</div>
		
	';
			 }

# Close database connection.

	}
# Or display message if no data is found.
	else { echo '<p>There are currently no items to show.</p>' ; }
	?>
  </div>
</div>

<h2 style="color:white">Top 5 in the UK Today <h2>
    

 <div class="container">
  <div class="row">
  <?php  
# Retrieve data from 'tv_shows_webflix' database table.
$q = "SELECT * FROM tv_shows_webflix WHERE cat_id=3" ;

# Mysqli_query function performs a query against a database.
	$r = mysqli_query( $link, $q ) ;
    # 5. The mysqli_num_rows() function returns the number of rows in a result set. 
	if ( mysqli_num_rows( $r ) > 0 )
	{
/* mysql_fetch_array — Fetch a result row as an associative array, a numeric array, or both.
   Returns an array of strings that corresponds to display body section.
*/
 
	while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
	{

	echo '
	<div class="col-sm d-flex justify-content-center">
    <div class="card shadow-lg p-3 mb-5" style="width: 12rem; background-color: #181414;">
    <img src="'. $row['tv_image'].'" class="card-img-top" alt="movie">
     <div class="card-body">


   <a href="view_tv.php?id='.$row['tv_id'].'"  class="btn btn-dark btn-block" style="background-color: #D50e0c;">See details</a>
   
  </div>
  
</div>
</div>

		
	';
			 }

# Close database connection.
	mysqli_close( $link) ; 
	}
# Or display message if no data is found.
	else { echo '<p>There are currently no items to show.</p>' ; }
	?>
  </div>
</div>
<hr style="background-color:#ffff;">
</div>



<?php
# including footer file
include ( 'includes/footer.php' ) ;

?>