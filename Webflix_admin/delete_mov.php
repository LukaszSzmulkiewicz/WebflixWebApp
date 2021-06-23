<?php
# Starting a session, adding the header and database conneciton files.
session_start() ;
 include ( 'includes/header_sign_out.php' ) ;
 require ( 'includes/connect_db.php' ) ;


# Get passed movie id and assign it to a variable.
if
 ( isset( $_GET['id'] ) )
 {
  $id = $_GET['id'] ; 

 }
else 
 {
  echo 'Movie can not be delited';

}

# Delete selective item data from 'movie' database table. 
$q = "DELETE FROM movies_webflix WHERE mov_id = $id";
$link->query($q);

    echo '
    <div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="p-2 bd-highlight col-example">
    <div class="card border-dark">
       <div class="card-body">
       <h2>Movie deleted.</h2>
       <a href="dash_mov.php"  
       class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
      
       </div>
       </div>
       </div>
      
    '; 
# Close database connection.
mysqli_close($link);
?>
  