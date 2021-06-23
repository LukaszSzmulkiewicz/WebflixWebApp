<?php
session_start() ;
 # Adding a header
 include ( 'includes/header_sign_out.php' ) ;

 # Open database connection.
 require ( 'includes/connect_db.php' ) ;


# Get passed user id and assign it to a variable.
if
 ( isset( $_GET['id'] ) )
 {
  $id = $_GET['id'] ; 

 }
else 
 {
  echo 'User can not be delited';

}

# Delete selective item data from 'users_webflix' database table. 
$q = "DELETE FROM users_webflix WHERE id = $id";
$link->query($q);

    echo '
    <div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="p-2 bd-highlight col-example">
    <div class="card border-dark">
       <div class="card-body">
       <h2>User deleted.</h2>
       <a href="dashboard.php"  
       class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
      
       </div>
       </div>
       </div>
      
    '; 
    
# Close database connection.
mysqli_close($link);
?>
  