<!doctype html>
<html lang="en">


<?php # Display header and connect to db
include ( 'includes/header_sign_out.php' ) ;
require ( 'includes/connect_db.php' ) ;
include ( 'includes/side_dash.php' ) ;
?>
<!--Displaying a table with TV Shows details and add, edit, delete buttons -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
      <h1>Dashboard</h1>
    
      </div>

      <h2>TV Shows</h2>

      <hr>
           <div class="container">
           <div class="col-lg d-flex justify-content-center">
         <a href="add_tv.php"  
         class="btn btn-dark btn-lg" style="background-color: #D50e0c;"><h3>Add TV Show</h3></a>
        </div>
        </div>
        <hr>
      
      
      <div class="table-responsive-sm">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
              <th >TV Show ID</th>
              <th >TV Show Title</th>
              <th >TV Show Image</th>
              <th >Category ID</th>
              <th >TV Show Description</th>
              <th >Release Year</th>
              <th >TV Show Language</th>
              <th >TV Show Seasons</th>
              <th >TV Show Seasons</th>
              <th >TV Show Episodes</th>
              <th >TV Show Link</th>
            
              
            </tr>
        

      
<?php  

session_start() ;

# Retrieve data from 'tv_shows_webflix' database table.
$q = "SELECT * FROM tv_shows_webflix ORDER BY `tv_shows_webflix`.`cat_id` ASC";

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
	echo'<tr>
        <td class="col-1">'.$row['tv_id'].'</td>
        <td class="col-1">'.$row['tv_title'].'</td>
        <td class="col-1">'.$row['tv_image'].'</td>
        <td class="col-1">'.$row['cat_id'].'</td>
        <td class="col-3">'.$row['tv_description'].'</td>
        <td class="col-1">'.$row['tv_release_year'].'</td>
        <td class="col-1">'.$row['tv_language'].'</td>
        <td class="col-1">'.$row['tv_seasons'].'</td>
        <td class="col-1">'.$row['tv_episodes'].'</td>
        <td class="col-1">'.$row['tv_trailer'].'</td>
        <td class="col-1">'.$row['tv_link'].'</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="col-1"><h5>'.$row['tv_title'].':</h3></td>
        <td class="col-1"><a href="edit_tv.php?id='.$row['tv_id'].'"  
        class="btn btn-dark btn-block" style="background-color: #D50e0c;">Edit</a></td>
        <td class="col-1"><a href="delete_tv.php?id='.$row['tv_id'].'"  
        class="btn btn-dark btn-block" style="background-color: #D50e0c;">Delete</a></td>  
      </tr>';
			 }
}
# Or display message if no data is found.
	else { echo '<p>There are currently no items to show.</p>' ; }
	?>
                 
                 </tbody>
        </table>
      </div>
    </main>
 



    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

