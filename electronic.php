<?php
  include 'c.php';
  $select = "select * from product";
  $qua = mysqli_query($con, $select);
  $num = mysqli_num_rows($qua);
  // $selectss = "select * from product where id='8'";
  // $q = mysqli_query($con, $selectss);
  // $r = mysqli_fetch_array($q);
  session_start();
  ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media.css">
  <title>Hello, world!</title>
</head>

<body>
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
       <input type="hidden" name="" id="myaccount" value="<?php echo($_SESSION["userid"]); ?>">
       <h3 id="login"><a href="login.php"> Login</a></h3>
       <h3 id="account" style="display:none;"><a href="cart.php" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg></a><?php 
      
      $userid=$_SESSION["userid"];
      $selp = "select * from cart where userid = '$userid'";
      $ap = mysqli_query($con, $selp);
      $num = mysqli_num_rows($ap);
      echo $num;  ?><a href="myaccount.php"> My Account</a></h3>

     </div>

   </nav>
  <hr>
  <!--navbar end -- -->
  <div class="row mt-5 grid" id="newdiv">
    <?php
    include 'c.php';
    $select = "select * from product where cat = 'Electronics'";
    $qua = mysqli_query($con, $select);
    while ($re = mysqli_fetch_array($qua)) { ?>
      <div class="col-sm-2 grid-items">
        <div class="card" id="newp">
          <a href="productpageoflimited.php?id=<?php echo ($re['id']); ?>"><img class="card-img-top img-fluid" src="admin/<?php echo ($re['image']); ?>"></a>
          <div class="card-title">
            <h4><?php echo ($re['name']); ?></h4>
          </div>
          <div class="card-text">
            <?php echo ($re['dis']); ?> <br /><br />
            <a href="buy.php?id=<?php echo ($re['id']); ?>" class="btn btn-success text-light"> Buy Now</a> &nbsp; <a href="addcarte.php?id=<?php echo ($re['id']); ?>" class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</a> <br /><br />
                  </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>

  <!-- footer -->
  <footer class="py-5 mb-2" id="footer">
    <div class="row">
      <div class="col-12 col-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false">
          <title>Product</title>
          <circle cx="12" cy="12" r="10"></circle>
          <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path>
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


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
<script>
 function my()
 {
   const my = document.getElementById("myaccount").value;
  //  alert(my);
   if(my > 0)
   {
    document.getElementById("account").style.display="block";
    document.getElementById("login").style.display="none";
   }
   else{

   }
 }
 my();
   </script>