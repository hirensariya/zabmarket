<?php
  include 'c.php';
  session_start();
  $id=$_SESSION["userid"];
  $select = "select * from r where id = '$id'";
  $qua = mysqli_query($con, $select);
  $r = mysqli_fetch_array($qua);
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
    <!-- <link rel="stylesheet" href="bar.css"> -->

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

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item " style="padding-left: 30px;">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link" style="background-color:white; border:none; color:rgb(0,127,255)"
                        onclick="up()">Update Profile</button>
                </li>
                <li class="nav-item"><a></a>
                    <button class="nav-link" style="background-color:white; border:none; color:rgb(0,127,255)"
                        onclick="di()"> Oreder Detilas</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>

    </nav>

    <!-- navbar end -->


    <div class="container-fluid">
        <div class="container" id="profile" style="display:block">
            <div class="py-5 text-center" id="l">
                <img class="d-block mx-auto mb-4" src="z.svg" alt="" width="72" height="72">
                <h2>zabmarket.in</h2>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Sign Up</h4>
                    <form class="needs-validation" novalidate="" action="update.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" name="first" id="firstName" placeholder=""
                                    value="<?php echo ($r['frist_name']);?>" required="" autofocus="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" name="last" placeholder=""
                                    value="<?php echo ($r['last_name']);?>" required="" autofocus="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="you@example.com" autofocus="" value="<?php echo ($r['email']);?>">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Phone">Phone no.</label>
                            <input type="tel" class="form-control" name="phone" id="Phone" required="" autofocus=""
                                value="<?php echo ($r['phone']);?>">
                            <div class="invalid-feedback">
                                Please enter your Phone no.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" name="password" required=""
                                autofocus="" value="<?php echo ($r['password']);?>">
                            <div class="invalid-feedback">
                                Please enter your Password.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="1234 Main St" required="" autofocus=""
                                value="<?php echo ($r['address']);?>">
                            <div class="invalid-feedback">
                                Please enter your address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" name="address2"
                                placeholder="Apartment or suite" value="<?php echo ($r['address2']);?>">
                        </div>


                        <hr class="mb-4">

                        <button class="btn btn-primary btn-lg btn-block" name="singup" type="submit">Update</button>
                    </form>
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">© zabmarket</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
            </footer>
        </div>

        <div class="container" id="dt" style="display:none;">
            <div class="usertable">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Payment id</th>
                            <th scope="col">Product id</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Product quantaty</th>
                            <th scope="col">Product price</th>
                            <th scope="col">Coustmer name</th>
                            <th scope="col">Coustmer phone</th>
                            <th scope="col">Coustmer address</th>
                            <th scope="col">Coustmer address2</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
      $no=0;
      $select = "select * from ordertable where userid = '$id'";
      $a = mysqli_query($con, $select);
      while ($row = mysqli_fetch_array($a)) { 
      ?>
                        <tr>
                            <th scope="row">
                                <?php echo ($no);?>
                            </th>
                            <td>
                                <?php echo ($row['payid']);?>
                            </td>
                            <td>
                                <?php echo ($row['pid']);?>
                            </td>
                            <td>
                                <?php echo ($row['pname']);?>
                            </td>
                            <td>
                                <?php echo ($row['pqty']);?>
                            </td>
                            <td>
                                <?php echo ($row['pprice']);?>
                            </td>
                            <td>
                                <?php echo ($row['oname']);?>
                            </td>
                            <td>
                                <?php echo ($row['ophone']);?>
                            </td>
                            <td>
                                <?php echo ($row['oaddress']);?>
                            </td>
                            <td>
                                <?php echo ($row['oaddress2']);?>
                            </td>
                            <td>
                                <?php echo ($row['date']);?>
                            </td>
                        </tr>
                        <?php  $no++;}?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


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
        function up() {
            document.getElementById("profile").style.display = "block";
            document.getElementById("dt").style.display = "none";
        }
        function di() {
            document.getElementById("profile").style.display = "none";
            document.getElementById("dt").style.display = "block";
        }
    </script>

</html>