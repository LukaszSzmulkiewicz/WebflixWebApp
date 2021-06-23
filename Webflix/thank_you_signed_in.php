<!doctype html>
<html lang="en">
<?php    
include( 'includes/header_sign_in.php' ) ;
session_start();
require ( 'includes/connect_db.php' ) ;


 $id= $_SESSION['id'];


$q = "UPDATE users_webflix SET member_type='paid' WHERE id='$id'"; 

$r = mysqli_query ( $link, $q ) ;

?>
        
        
        <div class="d-flex align-items-center justify-content-center" style="height: 350px">
            <div class="p-2 bd-highlight col-example">
                <div class="card border-dark">
                    <div class="card-body">
                     <h3>Thank you for your purchase! <br> Please sign in, to explore the Premium membership!</h3>
                     <a href="login.php"  
                     class="btn btn-dark btn-block" style="background-color: #D50e0c;">Close</a>
        
                    </div>
                </div>
            </div>
        </div>

<?php
include ( 'includes/footer.php' ) ;

?>