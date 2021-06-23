<!doctype html>
<html lang="en">


<?php 
# Adding header.
include ( 'includes/header_sign_out.php' ) ;

$postedData = $_SESSION['formPostData'];


# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
# Connect to the database.
require ('includes/connect_db.php'); 

# Initialize an error array.
$errors = array();

# Check for a TV Show Title.
if ( empty( $_POST[ 'tv_title' ] ) )
{ $errors[] = 'Enter TV Show Title.' ; }
else
{ $tv_title = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_title' ] ) ) ; }

# Check for a Image Directory.
if (empty( $_POST[ 'tv_image' ] ) )
{ $errors[] = 'Enter Image Directory.' ; }
else
{ $tv_image = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_image' ] ) ) ; }

# Check for a TV Show Description.

if (empty( $_POST[ 'tv_description' ] ) ) 
{ $errors[] = 'Enter TV Show Description' ; }
else
{  $tv_description = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_description' ] ) ) ; }

# Check for anCategory ID.
if ( empty( $_POST[ 'cat_id' ] ) )
{ $errors[] = 'Enter Category ID.'; }
else
{ $cat_id = mysqli_real_escape_string( $link, trim( $_POST[ 'cat_id' ] ) ) ; }


# Check for a Release Year.
if ( empty( $_POST[ 'tv_release_year' ] ) )
{ $errors[] = 'Enter Release Year.'; }
else
{ $tv_release_year = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_release_year' ] ) ) ; }
    
# Check for a Number of Seasons.
if ( empty( $_POST[ 'tv_seasons' ] ) ) 
{ $errors[] = 'Enter Number of Seasons'; }
else
{ $tv_seasons = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_seasons' ] ) ) ; }    

# Check for a Number of Episodes.
if ( empty( $_POST[ 'tv_episodes' ] ) ) 
{ $errors[] = 'Enter Number of Episodes'; }
else
{ $tv_episodes = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_episodes' ] ) ) ; }  

# Check for a TV Show Language.
if ( empty( $_POST[ 'tv_language' ] ) )
{ $errors[] = 'Enter TV Show Language'; }
else
{ $tv_language = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_language' ] ) ) ; }    

# Check for TV Show Trailer Directory
if ( empty( $_POST[ 'tv_trailer' ] ) )
{ $errors[] = 'Enter TV Show Trailer Directory'; }
else
{ $tv_trailer = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_trailer' ] ) ) ; }    

# Check for a TV Show Directory.
if ( empty( $_POST[ 'tv_link' ] ) )
{ $errors[] = 'Enter TV Show Directory'; }
else
{ $tv_link = mysqli_real_escape_string( $link, trim( $_POST[ 'tv_link' ] ) ) ; }    


# On success add TV show  into 'tv_shows_webflix' database table.
if ( empty( $errors ) ) 
{
  $q = "INSERT INTO tv_shows_webflix (tv_title, tv_image, cat_id, tv_description, 
  tv_release_year, tv_language, tv_seasons, tv_episodes,  tv_trailer, tv_link) 
  VALUES ('$tv_title', '$tv_image', '$cat_id', '$tv_description', '$tv_release_year', 
   '$tv_language', '$tv_seasons', '$tv_episodes', '$tv_trailer', '$tv_link')";
  $r = @mysqli_query ( $link, $q ) ;
  if ($r)
  { echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="p-2 bd-highlight col-example">
    <div class="card border-dark">
       <div class="card-body">
       <h2>TV Show Added.</h2>
       <a href="dash_tv.php"  
       class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
      
       </div>
       </div>
       </div>';}

  # Close database connection.
  mysqli_close($link); 

  exit();
}
# Or report errors.
else 
{
  echo '<div class="container">
		  <div class="alert alert-primary alert-dismissible fade show" style="background-color: #59B3A2;"role="alert">
		  <h1>Error!</h1>
		  <p id="err_msg" style="color: #FFFFFF;">The following error(s) occurred:<br>' ;
  foreach ( $errors as $msg )
  { echo " - $msg<br>" ; }
  echo '<hr>
		  <p class="mb-0" style="color: #FFFFFF;">Please try again.</p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
		  </button>
		 </div>
		</div>';
  # Close database connection.
  mysqli_close( $link );
}  
}

?>  
<!--Begining of the Add TV Show Form -->
<h1 class="text-center display-4" style="color:#D50e0c;">Add TV Show </h1> 

<div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="#" method="post">
<hr>
<div class="row">
<div class="form-group">
<label for="tv_title"style="color:#285873;">TV Show Title</label>
<input type="text" class="form-control" id="tv_title" name="tv_title" placeholder="Enter TV Show Title" size="40" 
value="<?php if (isset($_POST['tv_title'])) echo $_POST['tv_title']; ?>"required>
</div>
	
<div class="form-group">
<label for="tv_image"style="color:#285873;">Image Directory</label>
<input type="text" class="form-control" id="tv_image" name="tv_image" placeholder="Enter Image Directory" size="40" 
value="<?php if (isset($_POST['tv_image'])) echo $_POST['tv_image']; ?>"required>

</div>
</div>

<div class="row">
<div class="form-group">
<label for="tv_description"style="color:#285873;">TV Show Description</label>
<input type="text" class="form-control" id="tv_description" name="tv_description" placeholder="Enter TV Show Description" size="40" 
value="<?php if (isset($_POST['tv_description'])) echo $_POST['tv_description']; ?>"required>
</div>
			
<div class="form-group">

<div class="row">
<div class="col-sm">
<label for="cat_id"style="color:#285873;">Category ID</label>
<input type="text" class="form-control" id="cat_id" name="cat_id" placeholder="Category ID" size="5" 
value="<?php if (isset($_POST['cat_id'])) echo $_POST['cat_id']; ?>"required>
</div>
<div class="col-sm">
<label for="tv_release_year"style="color:#285873;">Release Year</label>
<input type="text" class="form-control" id="tv_release_year" name="tv_release_year" placeholder="Enter Release Year" size="5" 
value="<?php if (isset($_POST['tv_release_year'])) echo $_POST['tv_release_year']; ?>"required>
</div>
<div class="col-sm">
<label for="tv_seasons"style="color:#285873;">TV Seasons</label>
<input type="text" class="form-control" id="tv_seasons" name="tv_seasons" placeholder="Enter Number of Seasons" size="5" 
value="<?php if (isset($_POST['tv_seasons'])) echo $_POST['tv_seasons']; ?>"required>
</div>
<div class="col-sm">
<label for="tv_episodes"style="color:#285873;">TV Episodes</label>
<input type="text" class="form-control" id="tv_episodes" name="tv_episodes" placeholder="Enter Number of Episodes" size="5" 
value="<?php if (isset($_POST['tv_episodes'])) echo $_POST['tv_episodes']; ?>"required>
</div>
</div>
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="tv_language"style="color:#285873;">TV Show Language</label>
<input type="text" class="form-control" id="tv_language" name="tv_language" placeholder="Enter TV Show Language" size="40" 
value="<?php if (isset($_POST['tv_language'])) echo $_POST['tv_language']; ?>"required>
</div>
				
<div class="form-group">
<label for="tv_trailer"style="color:#285873;">TV Show Trailer Directory</label>
<input type="text" class="form-control" id="tv_trailer" name="tv_trailer" placeholder="Enter TV Show Trailer Directory" 
size="40" value="<?php if (isset($_POST['tv_trailer'])) echo $_POST['tv_trailer']; ?>">
</div>
</div>
	
<div class="row">

<div class="form-group">
<label for="tv_link"style="color:#285873;">TV Show Directory</label>
<input type="text" class="form-control" id="tv_link" name="tv_link" placeholder="Enter TV Show Directory" size="40" 
value="<?php if (isset($_POST['tv_link'])) echo $_POST['tv_link']; ?>">
</div>

</div>
<hr>	
<div class="row justify-content-center">
<div class="form-group">
<div class="card-body">
<input class="btn btn-success btn-lg btn-block" type="submit" style="background-color: #D50e0c;" value="Submit">
<a href="dash_tv.php" class="btn btn-success btn-lg btn-block" style="background-color: #D50e0c;">Cancel</a>
</div>
</div>
</div>
		
</form><!--Closing Form -->
</div>
</div>
<hr>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>