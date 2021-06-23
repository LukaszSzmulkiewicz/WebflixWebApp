<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Webflix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
  <h1 class="display-1 mb-auto"href="index.php"style="color: #D50e0c;"><b>Webflix</b></h1>
</div>


  </header>
  
<!-- Displaying the membership choices to the user -->

  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h3 class="display-6 fw-normal">You are now registered, please review our subscription plans!</h3>
 </div>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Basic</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£0<small class="text-muted fw-light">/year</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
         
         </ul>
         <form action="login.php" method="post">
            <button type="submit" class="w-100 btn btn-lg btn-outline-danger" href="login.php">Sign in</button>
         </form>
          </div>
        </div>
      </div>
      <div class="col">
      <h3 class="display-1 text-center mb-4"><b></b></h3>
      <h3 class="display-1 text-center mb-4"><b></b></h3>
      <h3 class="display-1 text-center mb-4"><b></b></h3>
      <h3 class="display-1 text-center mb-4"><b></b></h3>
      <h3 class="display-1 text-center mb-4"><b></b></h3>
      <h3 class="display- text-center mb-4"><b></b></h3>
      <h3 class="display-6 text-center mb-4"><b>VS</b></h3>
      </div>
        <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-white bg-danger border-danger">
            <h4 class="my-0 fw-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£99<small class="text-muted fw-light">/year</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
         
            </ul>
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="N69YRPJ9W93TS">
            <input type="image" src="https://www.sandbox.paypal.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" 
            alt="PayPal – The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
            </form>



          </div>
        </div>
      </div>
    </div>
<!-- Displaying membership plans in a table -->
    <h2 class="display-6 text-center mb-4"><b>Compare plans</b></h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Basic</th>
            <th style="width: 22%;">Premium</th>
            <th style="width: 22%;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Trailers</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Films</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">TV programmes</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
         </tr>

          <tr>
            <th scope="row" class="text-start">Documentaries</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
         </tr>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
 
  </footer>
</div>


    
  </body>
</html>
