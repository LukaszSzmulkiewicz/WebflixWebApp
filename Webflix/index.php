<html lang="en" class="h-100">
  <head>
        <!-- Required meta tags -->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
  <!-- Custom styles for this template -->
   	<link rel="stylesheet" href="css/cover.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Webflix</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">


  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">

  </header>

      <div>
        <h1 class="display-1 mb-auto"style="color: #D50e0c;"><b>Webflix</b></h1>
    </div>

<!-- Container with images -->
      <div class="container">
  <div class="row">
    <div class="col">
    <img src="img/Movies/Action/Avengers Endgame.jpg" class="card-img-top" alt="movie">
     
    </div>
    <div class="col">
    <img src="	img/Movies/Action/The Matrix.jpg" class="card-img-top" alt="movie">
     
    </div>
    <div class="col">
    <img src="img/Movies/Comedy/Toy Story.jpg" class="card-img-top" alt="movie">
      
    </div>
  </div>
</div>

  <main class="px-3">
    <h1>Unlimited films, TV programmes and more..</h1>

   
			 <!-- Sign in/ register form -->
     <form  class="row gy-2 gx-3 align-items-center"action="register.php" method="post" >
			<div class="input-group justify-content-center">
      
		        <a href="register.php" class="btn btn-dark btn-lg" style="background-color: #D50e0c;">Register</a>

              <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark btn-lg" style="background-color: #D50e0c;" data-toggle="modal" 
            data-target="#register"style="color:#D50e0c">Sign in</button>	
		  
      </div>
       
		</form>
     
   

		   
		 
  </main>

  <footer class="mt-auto text-white-50">
   
  </footer>
</div>



    

<!-- ========================
Modal Sign in
============================-->
<div class="modal fade " id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="container">
			<h1 class="display-5" style="color:#181414;">Sign in</h1>
		</div>
		<hr>
			<div class="container">
				<form action="login_action.php" method="post">
				
					<hr>
		
					<div class="form-group">
					<label for="email"style="color:#181414;">Email</label>
						 <div class="row">
							<div class="col">
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" size="50" required>
						</div>
						 </div>
					</div>
		
					<div class="form-group">
					<label for="password"style="color:#181414;"> Password</label>
						 <div class="row">
							<div class="col">
							 <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password"size="20" required>
	
							 </div>
					 </div>
					</div>
					<hr>
		 			
					<div class="form-group">
						 <div class="row">
							<div class="col">
							<input class="btn btn-dark btn-lg btn-block" type="submit" style="background-color: #D50e0c;" value="Sign in">
							
							</div>
						 </div>
             <div id="formFooter">
      <a class="underlineHover" href="forgot_pass.php"style="color:#181414;">Forgot Password?</a>
    </div>
					</div>
				</form><!--Closing Form -->
		
				
			</div><!--Closing container-->
		</div><!--Closing Modal Body-->
</div>
</div> <!--Closing Modal -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>