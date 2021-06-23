<?php
# starting the session, adding header and database connection files.
session_start() ;
 include ( 'includes/header_sign_out.php' ) ;
 require ( 'includes/connect_db.php' ) ;
 ?>

<?php

//getting the item id to update
  if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
 
  } else {
    echo "Unable to display category detials";
  }
 
 // checking if the form is submitted 
  if (isset($_POST['submit'])) {
    
        
      $ct_name = mysqli_real_escape_string( $link, trim( $_POST[ 'cat_name' ] ) ); 
    
      //  database code to update the category  
      $q = "UPDATE category_webflix SET cat_name='$ct_name'
      WHERE cat_id='$id'"; 

      // category updated message
      $r = mysqli_query ( $link, $q ) ;
      echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
      <div class="p-2 bd-highlight col-example">
      <div class="card border-dark">
         <div class="card-body">
         <h2>Category updated.</h2>
         <a href="dash_category.php"  
         class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
        
         </div>
         </div>
         </div>';
      $db->close();
   
  } else {
    # retrieving the category details related to the category id, used to populate the edition form
    $q = "SELECT * FROM category_webflix WHERE cat_id = $id" ;
    $r = mysqli_query( $link, $q ) ;
    if ( mysqli_num_rows( $r ) == 1 )
    {
      $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

        $ct_name = $row['cat_name'];
         
    }
    else 
    {
     echo "Undabe to destply category details!";

    }

  # Close database connection.
mysqli_close($link);
  }
?>

<!--Edit Category Form -->
<h1 class="text-center display-4" style="color:#D50e0c;">Edit Category </h1> 
<div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="p-2 bd-highlight col-example">

<div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="#" method="post">
<hr> 
<div class="form-group">
<label for="cat_name"style="color:#285873;">Category Name</label>
<input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Category Name" size="40" 
value="<?php echo htmlspecialchars($ct_name, ENT_QUOTES)?>"require>
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
</div>