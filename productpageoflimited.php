<?php
include 'c.php';
$id =$_GET['id'];
$select = "select * from limited where id ='$id'";
$qua = mysqli_query($con, $select);
$num = mysqli_num_rows($qua);
$pro = mysqli_fetch_array($qua)
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
  <title>Welcome To Zabmarket</title>
</head>

<body>
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
            <a class="dropdown-item" href="electronic.html">Electronics</a>
            <a class="dropdown-item" href="dress.html">Dress</a>

            <a class="dropdown-item" href="cover.html">Passport Cover</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 bg-light" type="submit">Search</button>
      </form>
    </div>

  </nav>
  <hr>
  <!-- navbar end -->

  <!-- product item -->

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block w-100" src="<?php echo ($pro['image']);?>" alt="First slide"> </div>
            <div class="carousel-item"> <img class="d-block w-100" src="rsz_214.jpg" alt="Second slide"> </div>
            <div class="carousel-item"> <img class="d-block w-100" src="rsz_5.jpg" alt="Third slide"> </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <h2><?php echo ($pro['name']);?></h2>
        </div>
        <div class="row">
          <h1><i class="fa fa-inr" aria-hidden="true"></i> 599</h1>
          &nbsp; &nbsp;
          <h3><del>799</del></h3>
          &nbsp; &nbsp;
          <h2 class="text-success">30% off</h2>
        </div>
        <div class="row">
          <h3 class="text-warning"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></h3>
          &nbsp; &nbsp;
          <h5>1200 star rating and 250 reviews</h5>
        </div>
        <div class="row">
          <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong> 20% Instant Discount on SBI Credit Cards</p>
          <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card </p>
          <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong> Extra 5% off* with Axis Bank Buzz Credit Card</p>
          <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong>20% Instant Discount on pay with <i class="fa fa-google-wallet" aria-hidden="true"></i> google wallet </p>
        </div>
        <div class="row mt-4">
          <h3 class="text-info"><i class="fa fa-map-marker" aria-hidden="true"></i></h3>
          <p style="font-size: 20px"> &nbsp; Delivery by23 Jul, Tuesday | &nbsp; <span class="text-success">FREE</span> </p>
        </div>
        <div class="row mt-4">
          <h4>Size: &nbsp; &nbsp;</h4>
          <div class="dropdown show"> <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select sizes </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">small</a> <a class="dropdown-item" href="#">meduam </a> <a class="dropdown-item" href="#">large</a> </div>
          </div>
        </div>
        <div class="row mt-4">
          <h4>Colors: &nbsp; &nbsp; </h4>

          <a class="btn btn-primary text-light">Sky Blue</a> &nbsp; <a class="btn btn-danger text-light"> red</a>&nbsp; <a class="btn btn-info text-light"> blue </a> &nbsp; <a class="btn btn-warning text-light"> yellow</a> &nbsp; <a class="btn btn-success text-light"> green</a>
        </div>

        <div class="row mt-4">
          <h4>Seller: &nbsp; &nbsp;</h4>
          <p style="font-size: 18px">G.M Garments </p>
        </div>


      </div>
    </div>
  </div>


  <!-- product item -->
  
  




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>