<?php # DISPLAY SHOPPING CART ADDITIONS PAGE.

# Access session.
session_start() ;

# Set page title and display header section.
$page_title = 'Movie Details' ;
include ( 'includes/header_sign_out.php' ) ;

# Get passed movie id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

# Open database connection.
require ( 'includes/connect_db.php' ) ;

# Retrieve selective item data from 'movies_webflix' database table. 
$q = "SELECT * FROM movies_webflix WHERE mov_id = $id" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

    echo '<h1 class="text-center display-4" style="color:#fff">'.$row['mov_title'].'</h1> 
    <div class="container">
    
            <div class="row justify-content-center">
            
                <div class="col-sm-12 col-md-4">
                   <img src="'. $row['mov_image'].'" class="card-img-top" alt="'.$row['mov_title'].'">
                </div>
                <div class="col-sm-12 col-md-4">
                    <h5 style="color:#fff">'.$row['mov_description'].'</h5>
                    <hr>
                    <h5 style="color:#fff"> <b>Movie Release Year: </b>'.$row['mov_release_year'].'</h5>
                    <h5 style="color:#fff"> <b>Movie duration: </b>'.$row['mov_duration'].'</h5>
                    <h5 style="color:#fff"> <b>Movie language: </b>'.$row['mov_language'].'</h5>
                    <hr>
                    <h2>
                    <a href="play_mov.php?id='.$row['mov_id'].'"> 
                    <button type="button" class="btn btn-dark btn-lg" style="background-color: #D50e0c;" role="button"> Play Trailer </button>
                    </a>
                    <a href="play_full_mov.php?id='.$row['mov_id'].'"> 
                    <button type="button" class="btn btn-dark btn-lg" style="background-color: #D50e0c;" role="button"> Play Movie </button>
                    </a>
                  </h2>
                </div>
              
            </div>
            ';
  }


# Close database connection.
mysqli_close($link);
?>

 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>