<?php
# starting session, adding header and database connection file
session_start() ;
 include ( 'includes/header_sign_out.php' ) ;
 require ( 'includes/connect_db.php' ) ;
 ?>

<?php
// check if form submitted and add new category via an SQL query
  if (isset($_POST['submit'])) 
  {
            
      $ct_name = mysqli_real_escape_string( $link, trim( $_POST[ 'cat_name' ] ) ); 
    
      // database code
      $q = "INSERT INTO category_webflix (cat_name) 
      VALUES ('$ct_name')";
      $r = @mysqli_query ( $link, $q ) ;
      if ($r) 
     
      echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
      <div class="p-2 bd-highlight col-example">
      <div class="card border-dark">
         <div class="card-body">
         <h2>Category Added.</h2>
         <a href="dash_category.php"  
         class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
        
         </div>
         </div>
         </div>';
 

  # Close database connection.
mysqli_close($link);
  }
  else 
  {
      # Display form if not submited.
    echo '    
 
    <div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="p-2 bd-highlight col-example">
    <h1 class="text-center display-4" style="color:#D50e0c;">Add Category </h1> 
<div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="#" method="post">
<div class="form-group">
<label for="firstname"style="color:#285873;">Category Name</label>
<input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Category Name" size="40" 
value=" "require>
<hr>	
</div>
  
<div class="row justify-content-center">
<div class="form-group">
<input class="btn btn-dark btn-block btn-block" type="submit" name="submit" style="background-color: #D50e0c;" value="Submit">
<a href="dash_category.php"  class="btn btn-dark btn-block" style="background-color: #D50e0c;">Cancel</a>
</div>
</div>
      
</form><!--Closing Form -->
</div>
</div>
</div>
</div>';
  }
?>


