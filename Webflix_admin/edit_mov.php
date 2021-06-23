<?php
session_start() ;
 include ( 'includes/header_sign_out.php' ) ;
 require ( 'includes/connect_db.php' ) ;
 ?>

<?php

//update.php?, getting the item id passed on through previous page
  if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
 
  } else {
    echo "Unable to display user detials";
  }
  // if form is submited, variables are assigned with an error handling function.
  if (isset($_POST['submit'])) {
   
    $ok=true;
      // assigning form variables to variables used for the SQL code  
      $mov_title = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_title' ] ) ); 
      $mov_image = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_image' ] ) ); 
      $mov_description = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_description' ] ) ); 
      $cat_id = mysqli_real_escape_string( $link, trim( $_POST[ 'cat_id' ] ) ); 
      $mov_release_year = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_release_year' ] ) );
      $mov_duration = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_duration' ] ) );
      $mov_language = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_language' ] ) );
      $mov_trailer = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_trailer' ] ) );
      $mov_link = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_link' ] ) );
  
     if($ok){
      // sql code to update the table
      $q = "UPDATE movies_webflix SET mov_title='$mov_title', mov_image= '$mov_image', mov_description= '$mov_description', cat_id= '$cat_id', 
      mov_release_year= '$mov_release_year', mov_duration= '$mov_duration', mov_language='$mov_language', mov_trailer= '$mov_trailer', 
      mov_link='$mov_link' WHERE mov_id='$id'"; 
    
      $r = mysqli_query ( $link, $q ) ;
      // message displayed after submition
      echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
      <div class="p-2 bd-highlight col-example">
      <div class="card border-dark">
         <div class="card-body">
         <h2>Movie updated.</h2>
         <a href="dash_mov.php"  
         class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
         </div>
         </div>
         </div>';
         $db->close();
     }
    
   
  } 
  else 
  {
    // populating the form with the curent table details related to the id
    $q = "SELECT * FROM movies_webflix WHERE mov_id = $id" ;
    $r = mysqli_query( $link, $q ) ;
    if ( mysqli_num_rows( $r ) == 1 )
    {
      $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

        $mov_title = $row['mov_title'];
        $mov_image = $row['mov_image'];
        $mov_description = $row['mov_description'];
        $cat_id = $row['cat_id'];
        $mov_release_year = $row['mov_release_year'];
        $mov_duration = $row['mov_duration'];
        $mov_language = $row['mov_language'];
        $mov_trailer = $row['mov_trailer'];
        $mov_link = $row['mov_link'];
      
    }
    else 
    {
     echo "Undabe to destply user details!";

    }

  # Close database connection.
mysqli_close($link);
  }
?>
<!--Begining of the edid movie form -->
<h1 class="text-center display-4" style="color:#D50e0c;">Edit Movie </h1> 


<div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="#" method="post">
<hr>
<div class="row">
<div class="form-group">
<label for="mov_title"style="color:#285873;">Movie Title</label>
<input type="text" class="form-control" id="mov_title" name="mov_title" placeholder="Enter Movie Title" size="40" 
value="<?php echo htmlspecialchars($mov_title, ENT_QUOTES);?>">
</div>
	
<div class="form-group">
<label for="mov_image"style="color:#285873;">Image Directory</label>
<input type="text" class="form-control" id="mov_image" name="mov_image" placeholder="Enter Image Directory" size="40" 
value="<?php echo htmlspecialchars($mov_image, ENT_QUOTES);?>">
</div>
</div>

<div class="row">
<div class="form-group">
<label for="mov_description"style="color:#285873;">Movie Description</label>
<input type="text" class="form-control" id="mov_description" name="mov_description" placeholder="Enter Movie Description" size="40" 
value="<?php echo htmlspecialchars($mov_description, ENT_QUOTES);?>">
</div>
			
<div class="form-group">
<div class="row">
<div class="col-sm">
<label for="cat_id"style="color:#285873;">Category ID</label>
<input type="text" class="form-control" id="cat_id" name="cat_id" placeholder="Category ID" size="5" 
value="<?php echo htmlspecialchars($cat_id, ENT_QUOTES);?>">
</div>
<div class="col-sm">
<label for="mov_release_year"style="color:#285873;">Release Year</label>
<input type="text" class="form-control" id="mov_release_year" name="mov_release_year" placeholder="Enter Release Year" size="5" 
value="<?php echo htmlspecialchars($mov_release_year, ENT_QUOTES);?>">
</div>
<div class="col-sm">
<label for="mov_duration"style="color:#285873;">Movie Duration</label>
<input type="text" class="form-control" id="mov_duration" name="mov_duration" placeholder="Enter Movie Duration" size="5" 
value="<?php echo htmlspecialchars($mov_duration, ENT_QUOTES);?>">
</div>
</div>
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="mov_language"style="color:#285873;">Movie Language</label>
<input type="text" class="form-control" id="mov_language" name="mov_language" placeholder="Enter Movie Language" size="40" 
value="<?php echo htmlspecialchars($mov_language, ENT_QUOTES);?>">
</div>
				
<div class="form-group">
<label for="mov_trailer"style="color:#285873;">Movie Trailer Directory</label>
<input type="text" class="form-control" id="mov_trailer" name="mov_trailer" placeholder="Enter Movie Trailer Directory" size="40" 
value="<?php echo htmlspecialchars($mov_trailer, ENT_QUOTES);?>">
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="mov_link"style="color:#285873;">Movie Directory</label>
<input type="text" class="form-control" id="mov_link" name="mov_link" placeholder="Enter Movie Directory" size="40" 
value="<?php echo htmlspecialchars($mov_link, ENT_QUOTES);?>">
</div>

</div>
<hr>	
<div class="row justify-content-center">
<div class="form-group">
<div class="card-body">
<input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" style="background-color: #D50e0c;" value="Submit">
<a href="dash_mov.php" class="btn btn-dark btn-lg btn-block" style="background-color: #D50e0c;">Cancel</a>
</div>
</div>
</div>
		
</form><!--Closing Form -->
</div>
</div>
<hr>