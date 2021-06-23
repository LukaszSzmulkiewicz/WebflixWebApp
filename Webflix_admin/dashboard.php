<!doctype html>
<html lang="en">


<?php # Display header and connect to db
include ( 'includes/header_sign_out.php' ) ;
require ( 'includes/connect_db.php' ) ;
include ( 'includes/side_dash.php' ) ;
?>


<!--Displaying a table with user details and edit, delete buttons -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1>Dashboard</h1>
    
      </div>

      <h2>Users</h2>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
              <th>User ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Date Of Birth</th>
              <th>Country</th>
              <th>Email</th>
              <th>Contact Number</th>
              <th>Join Date</th>
              <th>Account Status</th>
              <th>Edit</th>
              <th>Delete</th>
              
            </tr>
        

      
<?php  

session_start() ;

# Retrieve data from 'users_webflix' database table.
$q = "SELECT * FROM users_webflix" ;

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

    <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['first_name'].'</td>
        <td>'.$row['last_name'].'</td>
        <td>'.$row['dob'].'</td>
        <td>'.$row['country'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['contact_number'].'</td>
        <td>'.$row['join_date'].'</td>
        <td>'.$row['account_status'].'</td>
        <td><a href="edit_user.php?id='.$row['id'].'"  
        class="btn btn-dark btn-block" style="background-color: #D50e0c;">Edit</a></td>
        <td><a href="delete_user.php?id='.$row['id'].'"  
        class="btn btn-dark btn-block" style="background-color: #D50e0c;">Delete</a></td>  
    </tr>
		
	';
			 }


	}
# Or display message if no data is found.
	else { echo '<p>There are currently no items to show.</p>' ; }
	?>
                 
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
