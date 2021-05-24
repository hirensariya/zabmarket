<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Demo Page</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
  </head>
  <body>
   <!-- As a link -->
   <nav class="navbar navbar-light" id="n">
     <div id="d1">
       <a class="navbar-brand" href="#" id="a1">Welcome to Zabmarket</a>
     </div>

   </nav>
   <hr>


   <!-- navbar -->
   <nav class="navbar navbar-expand-lg " id="n1">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item " style="padding-left: 30px;">
           <a class="nav-link" href="index.php">Home</a>
         </li>
         <li class="nav-item dropdown active">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Categeris
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="electronic.php">Electronics</a>
             <a class="dropdown-item" href="dress.php">Dress</a>

             <a class="dropdown-item" href="cover.php">Passport Cover</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="about.html">About us</a>
         </li>
       </ul>
     </div>

   </nav>

   <!-- navbar end -->


   <!-- carousel -->

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1200x300/?computer" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x300/?computer" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x300/?computer" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div style="margin-left:700px; margin-top:50px;">
 <button class="click" id="click">
Click me
 </button>
</div>
    

       <!-- footer -->
   <footer class="py-5 mb-2 mt-4 id="footer">
     <div class="row">
       <div class="col-12 col-md">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false">
           <title>Product</title>
           <circle cx="12" cy="12" r="10"></circle>
           <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
           </path>
         </svg>
         <small class="d-block mb-3 text-muted">© Zabmarket</small>
       </div>
       <div class="col-6 col-md">
         <h5>Features</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Cool stuff</a></li>
           <li><a class="text-muted" href="#">Random feature</a></li>
           <li><a class="text-muted" href="#">Team feature</a></li>
           <li><a class="text-muted" href="#">Stuff for developers</a></li>
           <li><a class="text-muted" href="#">Another one</a></li>
           <li><a class="text-muted" href="#">Last time</a></li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>Resources</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Resource</a></li>
           <li><a class="text-muted" href="#">Resource name</a></li>
           <li><a class="text-muted" href="#">Another resource</a></li>
           <li><a class="text-muted" href="#">Final resource</a></li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>Resources</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Business</a></li>
           <li><a class="text-muted" href="#">Education</a></li>
           <li><a class="text-muted" href="#">Government</a></li>
           <li><a class="text-muted" href="#">Gaming</a></li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>About</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Team</a></li>
           <li><a class="text-muted" href="#">Locations</a></li>
           <li><a class="text-muted" href="#">Privacy</a></li>
           <li><a class="text-muted" href="#">Terms</a></li>
         </ul>
       </div>
     </div>
   </footer>
   <!-- footer -->
   <!-- carousel end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   
  </body>
</html>
<script>
$( document ).ready(function() {
    $( "#click" ).click(function() {
  $( "img" ).animate({
    opacity: 0.25,
    height: "toggle"
  }, 5000, function() {
    // Animation complete.
  });
});
});
</script>