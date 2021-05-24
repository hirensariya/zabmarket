<?php
  session_start();
  include 'c.php';
  $st=0;
  $userid=$_SESSION["userid"];
  $sel = "select * from cart where userid = '$userid'";
  $ab = mysqli_query($con, $sel);
  $num = mysqli_num_rows($ab);
  while ($rowr = mysqli_fetch_array($ab)) { 
      $st=$st+($rowr['qut']*$rowr['price']);
  }
  ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="shop.html">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        integrity="sha256-fDncdclXlALqR3HOO34OGHxek91q8ApmD3gGldM+Rng=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"
        integrity="sha256-2DoaRRHfHWna6mpfGImxAx/cu0vFGpqEkcf/YXf+yk4=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="checkout.css">

    <title>Welcome To Zabmarket</title>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item " style="padding-left: 30px;">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <h3 id="account" style="display:none;"><a href="login.php"> My Account</a></h3>

        </div>

    </nav>

    <!-- navbar end -->

    <!-- checkout content -->

    <div class="container-fluid py-5">
        <div class="checkout">
            <div class="container">
                <main>
                    <div class="py-5 text-center">
                        <img class="d-block mx-auto mb-4" src="z.svg" alt="" width="72" height="57">
                        <h2>Checkout</h2>
                    </div>
                    <?php 
                      $id=$_SESSION["userid"];
                    $select = "select * from r where id = '$id'";
                    $qua = mysqli_query($con, $select);
                    $r = mysqli_fetch_array($qua);
                        
            ?>
                    <div class="row g-5">
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-primary">Your cart</span>
                                <span class="badge bg-primary rounded-pill"><?php echo ($num);?></span>
                            </h4>
                            <ul class="list-group mb-3">
                            <?php
                        include 'c.php';
                        $select = "select * from cart where userid = '$userid'";
                        $a = mysqli_query($con, $select);
                        while ($row = mysqli_fetch_array($a)) { 
                            ?>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0"><?php echo ($row['productname']);?></h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted"><?php echo ($row['qut']);?></span>
                                    <span class="text-muted"><?php echo ($row['price']);?></span>
                                </li>
                        <?php }?>

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total</span>
                                    <strong>   <?php
                      echo $st;?></strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-lg-8">
                            <h4 class="mb-3">Billing address</h4>
                            <form class="needs-validation" novalidate="" action="pay.php" method="POST">
                                <input type="hidden" name="payid" value="<?php echo($_SESSION["userid"]); ?>">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder=""
                                            value="<?php echo ($r['frist_name']);?>" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder=""
                                            value="<?php echo ($r['last_name']);?>" required="">
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span
                                                class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="you@example.com" value="<?php echo ($r['email']);?>">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="phone" class="form-label">Phone <span
                                                class="text-muted">(Optional)</span></label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder=""
                                            value="<?php echo ($r['phone']);?>">
                                        <div class="invalid-feedback">
                                            Please enter a phone for shipping updates.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                            required="" value="<?php echo ($r['address']);?>" name="address">
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="address2" class="form-label">Address 2 <span
                                                class="text-muted">(Optional)</span></label>
                                        <input type="text" class="form-control" id="address2"
                                            placeholder="Apartment or suite" value="<?php echo ($r['address2']);?>" name="address2">
                                    </div>


                                    <div class="col-md-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            State is required.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            City is required.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">
                                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>


    <!-- checkout content -->

    <!-- footer -->
    <footer class="py-5 mb-2" id="footer">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
                    viewBox="0 0 24 24" focusable="false">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10"></circle>
                    <path
                        d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
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





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
    <script src="demo.js"></script>
    <script src="temp.js"></script>

    <script>
        function my() {
            const my = document.getElementById("myaccount").value;
            //  alert(my);
            if (my > 0) {
                document.getElementById("account").style.display = "block";
                document.getElementById("login").style.display = "none";
            }
            else {

            }
        }
        my();


        function pay() {
            const pay = document.getElementById("cod").value;
            alert(pay);
            if (pay == "cod") {
                document.getElementById("pa").style.display = "none";
            }
            else {

            }
        }
//  pay();
    </script>

</html>