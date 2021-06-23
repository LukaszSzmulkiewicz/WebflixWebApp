<?php
# Starting a session, adding the header and database conneciton files.
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

  if (isset($_POST['submit'])) {
      $ok=true;
       // assigning form variables to variables used for the SQL code    
      $tv_title = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_title' ] ) ); 
      $tv_image = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_image' ] ) ); 
      $cat_id = mysqli_real_escape_string( $link, trim( $_POST[ 'cat_id' ] ) ); 
      $tv_description = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_description' ] ) ); 
      $tv_release_year = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_release_year' ] ) );
      $tv_language = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_language' ] ) );
      $tv_seasons = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_seasons' ] ) );
      $tv_episodes = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_episodes' ] ) );
      $tv_trailer = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_trailer' ] ) );
      $tv_link = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_link' ] ) );
  
     if($ok){
      // SQL code to handle the TV show update
      $q = "UPDATE tv_shows_webflix SET tv_title='$tv_title', tv_image= '$tv_image', cat_id= '$cat_id', tv_description= '$tv_description',  
      tv_release_year= '$tv_release_year', tv_language = '$tv_language', tv_seasons= '$tv_seasons', tv_episodes = '$tv_episodes', 
      tv_trailer= '$tv_trailer', tv_link='$tv_link' WHERE tv_id='$id'"; 
    
      $r = mysqli_query ( $link, $q ) ;
      // message displayed after submition
      echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
      <div class="p-2 bd-highlight col-example">
      <div class="card border-dark">
         <div class="card-body">
         <h2>TV Show updated.</h2>
         <a href="dash_tv.php"  
         class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
         </div>
         </div>
         </div>';
         $db->close();
     }
    
   
  } 
  else 
  {
    // SQL code to pull data from the table
    $q = "SELECT * FROM tv_shows_webflix WHERE tv_id = $id" ;
    $r = mysqli_query( $link, $q ) ;
    if ( mysqli_num_rows( $r ) == 1 )
    {
      $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

        $tv_title = $row['tv_title'];
        $tv_image = $row['tv_image'];
        $cat_id = $row['cat_id'];
        $tv_description = $row['tv_description'];
        $tv_release_year = $row['tv_release_year'];
        $tv_language = $row['tv_language'];
        $tv_seasons = $row['tv_seasons'];
        $tv_episodes = $row['tv_episodes'];
        $tv_trailer = $row['tv_trailer'];
        $tv_link = $row['tv_link'];
      
    }
    else 
    {
     echo "Undabe to destply user details!";

    }

  # Close database connection.
mysqli_close($link);
  }
?>
<!--Start of the Edit Movie Form -->
<h1 class="text-center display-4" style="color:#D50e0c;">Edit TV Show </h1> 
<div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="#" method="post">
<hr>
<div class="row">
<div class="form-group">
<label for="tv_title"style="color:#285873;">TV Show Title</label>
<input type="text" class="form-control" id="tv_title" name="tv_title" placeholder="Enter Movie Title" size="40" 
value="<?php echo htmlspecialchars($tv_title, ENT_QUOTES);?>">
</div>
	
<div class="form-group">
<label for="tv_image"style="color:#285873;">Image Directory</label>
<input type="text" class="form-control" id="tv_image" name="tv_image" placeholder="Enter Image Directory" size="40" 
value="<?php echo htmlspecialchars($tv_image, ENT_QUOTES);?>">
</div>
</div>

<div class="row">
<div class="form-group">
<label for="tv_description"style="color:#285873;">TV Show Description</label>
<input type="text" class="form-control" id="tv_description" name="tv_description" placeholder="Enter Movie Description" size="40" 
value="<?php echo htmlspecialchars($tv_description, ENT_QUOTES);?>">
</div>
			
<div class="form-group">
<div class="row">
<div class="col-sm">
<label for="cat_id"style="color:#285873;">Category ID</label>
<input type="text" class="form-control" id="cat_id" name="cat_id" placeholder="Category ID" size="5" 
value="<?php echo htmlspecialchars($cat_id, ENT_QUOTES);?>">
</div>
<div class="col-sm">
<label for="tv_release_year"style="color:#285873;">Release Year</label>
<input type="text" class="form-control" id="tv_release_year" name="tv_release_year" placeholder="Enter Release Year" size="5" 
value="<?php echo htmlspecialchars($tv_release_year, ENT_QUOTES);?>">
</div>
<div class="col-sm">
<label for="tv_seasons"style="color:#285873;">TV Seasons</label>
<input type="text" class="form-control" id="tv_seasons" name="tv_seasons" placeholder="Enter Number of Seasons" size="5" 
value="<?php echo htmlspecialchars($tv_seasons, ENT_QUOTES);?>">
</div>
<div class="col-sm">
<label for="tv_episodes"style="color:#285873;">TV Episodes</label>
<input type="text" class="form-control" id="tv_episodes" name="tv_episodes" placeholder="Enter Number of Episodes" size="5" 
value="<?php echo htmlspecialchars($tv_episodes, ENT_QUOTES);?>">
</div>
</div>
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="tv_language"style="color:#285873;">Movie Language</label>
<input type="text" class="form-control" id="tv_language" name="tv_language" placeholder="Enter Movie Language" size="40" 
value="<?php echo htmlspecialchars($tv_language, ENT_QUOTES);?>">
</div>
				
<div class="form-group">
<label for="tv_trailer"style="color:#285873;">Movie Trailer Directory</label>
<input type="text" class="form-control" id="tv_trailer" name="tv_trailer" placeholder="Enter Movie Trailer Directory" size="40" 
value="<?php echo htmlspecialchars($tv_trailer, ENT_QUOTES);?>">
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="tv_link"style="color:#285873;">Movie Directory</label>
<input type="text" class="form-control" id="tv_link" name="tv_link" placeholder="Enter Movie Directory" size="40" 
value="<?php echo htmlspecialchars($tv_link, ENT_QUOTES);?>">
</div>
</div>

<hr>	
<div class="row justify-content-center">
<div class="form-group">
<div class="card-body">
<input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" style="background-color: #D50e0c;" value="Submit">
<a href="dash_tv.php" class="btn btn-dark btn-lg btn-block" style="background-color: #D50e0c;">Cancel</a>
</div>
</div>
</div>
		
</form><!--Closing Form -->
</div>
</div>
<hr>