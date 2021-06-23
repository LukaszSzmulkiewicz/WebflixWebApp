<!doctype html>
<html lang="en">


<?php 
# adding header.
include ( 'includes/header_sign_out.php' ) ;
# Connect to the database.
require ('includes/connect_db.php'); 

$postedData = $_SESSION['formPostData'];


# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{


# Initialize an error array.
$errors = array();

# Check for a movie title.
if ( empty( $_POST[ 'mov_title' ] ) )
{ $errors[] = 'Enter Movie Title.' ; }
else
{ $mov_title = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_title' ] ) ) ; }

# Check for a movie image.
if (empty( $_POST[ 'mov_image' ] ) )
{ $errors[] = 'Enter Image Directory.' ; }
else
{ $mov_image = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_image' ] ) ) ; }

# Check for a movie description.

if (empty( $_POST[ 'mov_description' ] ) ) 
{ $errors[] = 'Enter Movie Description' ; }
else
{  $mov_description = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_description' ] ) ) ; }

# Check for category.
if ( empty( $_POST[ 'cat_id' ] ) )
{ $errors[] = 'Enter Category ID.'; }
else
{ $cat_id = mysqli_real_escape_string( $link, trim( $_POST[ 'cat_id' ] ) ) ; }


# Check for a Release Year.
if ( empty( $_POST[ 'mov_release_year' ] ) )
{ $errors[] = 'Enter Release Year.'; }
else
{ $mov_release_year = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_release_year' ] ) ) ; }
    
# Check for a Movie Duration.
if ( empty( $_POST[ 'mov_duration' ] ) ) 
{ $errors[] = 'Enter Movie Duration'; }
else
{ $mov_duration = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_duration' ] ) ) ; }    

# Check for a  Movie Language.
if ( empty( $_POST[ 'mov_language' ] ) )
{ $errors[] = 'Enter Movie Language'; }
else
{ $mov_language = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_language' ] ) ) ; }    

# Check for a Trailer Directory.
if ( empty( $_POST[ 'mov_trailer' ] ) )
{ $errors[] = 'Enter Movie Trailer Directory'; }
else
{ $mov_trailer = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_trailer' ] ) ) ; }    

# Check for Movie Directory.
if ( empty( $_POST[ 'mov_link' ] ) )
{ $errors[] = 'Enter Movie Directory'; }
else
{ $mov_link = mysqli_real_escape_string( $link, trim( $_POST[ 'mov_link' ] ) ) ; }    


# On success inserting movie into 'movies_webflix' database table.
if ( empty( $errors ) ) 
{
  $q = "INSERT INTO movies_webflix (mov_title, mov_image, mov_description, cat_id, 
  mov_release_year, mov_duration, mov_language, mov_trailer, mov_link) 
  VALUES ('$mov_title', '$mov_image', '$mov_description','$cat_id', '$mov_release_year', 
  '$mov_duration', '$mov_language', '$mov_trailer', '$mov_link')";
  $r = @mysqli_query ( $link, $q ) ;
  if ($r)
  { 

     
    echo '  <div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="p-2 bd-highlight col-example">
    <div class="card border-dark">
       <div class="card-body">
       <h2>Movie Added.</h2>
       <a href="dash_mov.php"  
       class="btn btn-dark btn-block" style="background-color: #D50e0c;">Back</a>
      
       </div>
       </div>
       </div>';

  }



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
<!--Add Movie Form -->
<h1 class="text-center display-4" style="color:#D50e0c;">Add Movie </h1> 

<div class="container" style="border:1px solid #cecece;">
<div class="col-lg d-flex justify-content-center">	
<form  action="#" method="post">
<hr>
<div class="row">
<div class="form-group">
<label for="mov_title"style="color:#285873;">Movie Title</label>
<input type="text" class="form-control" id="mov_title" name="mov_title" placeholder="Enter Movie Title" size="40" 
value="<?php if (isset($_POST['mov_title'])) echo $_POST['mov_title']; ?>"required>
</div>
	
<div class="form-group">
<label for="mov_image"style="color:#285873;">Image Directory</label>
<input type="text" class="form-control" id="mov_image" name="mov_image" placeholder="Enter Image Directory" size="40" 
value="<?php if (isset($_POST['mov_image'])) echo $_POST['mov_image']; ?>"required>

</div>
</div>

<div class="row">
<div class="form-group">
<label for="mov_description"style="color:#285873;">Movie Description</label>
<input type="text" class="form-control" id="mov_description" name="mov_description" placeholder="Enter Movie Description" size="40" 
value="<?php if (isset($_POST['mov_description'])) echo $_POST['mov_description']; ?>"required>
</div>
			
<div class="form-group">

<div class="row">
<div class="col-sm">
<label for="cat_id"style="color:#285873;">Category ID</label>
<input type="text" class="form-control" id="cat_id" name="cat_id" placeholder="Category ID" size="5" 
value="<?php if (isset($_POST['cat_id'])) echo $_POST['cat_id']; ?>"required>
</div>
<div class="col-sm">
<label for="mov_release_year"style="color:#285873;">Release Year</label>
<input type="text" class="form-control" id="mov_release_year" name="mov_release_year" placeholder="Enter Release Year" size="5" 
value="<?php if (isset($_POST['mov_release_year'])) echo $_POST['mov_release_year']; ?>"required>
</div>
<div class="col-sm">
<label for="mov_duration"style="color:#285873;">Movie Duration</label>
<input type="text" class="form-control" id="mov_duration" name="mov_duration" placeholder="Enter Movie Duration" size="5" 
value="<?php if (isset($_POST['mov_duration'])) echo $_POST['mov_duration']; ?>"required>
</div>
</div>
</div>
</div>
	
<div class="row">
<div class="form-group">
<label for="mov_language"style="color:#285873;">Movie Language</label>
<input type="text" class="form-control" id="mov_language" name="mov_language" placeholder="Enter Movie Language" size="40" 
value="<?php if (isset($_POST['mov_language'])) echo $_POST['mov_language']; ?>"required>
</div>
				
<div class="form-group">
<label for="mov_trailer"style="color:#285873;">Movie Trailer Directory</label>
<input type="text" class="form-control" id="mov_trailer" name="mov_trailer" placeholder="Enter Movie Trailer Directory" size="40" 
value="<?php if (isset($_POST['mov_trailer'])) echo $_POST['mov_trailer']; ?>">
</div>
</div>
	
<div class="row">

<div class="form-group">
<label for="mov_link"style="color:#285873;">Movie Directory</label>
<input type="text" class="form-control" id="mov_link" name="mov_link" placeholder="Enter Movie Directory" size="40" 
value="<?php if (isset($_POST['mov_link'])) echo $_POST['mov_link']; ?>">
</div>

</div>
<hr>	
<div class="row justify-content-center">
<div class="form-group">
<div class="card-body">
<input class="btn btn-success btn-lg btn-block" type="submit" style="background-color: #D50e0c;" value="Submit">
<a href="dash_mov.php" class="btn btn-success btn-lg btn-block" style="background-color: #D50e0c;">Cancel</a>
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