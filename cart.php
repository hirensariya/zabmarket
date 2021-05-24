<?php
session_start();

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="cart.css" /> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="main.css">
    <title>cart</title>
  </head>

  <body class="bg-light">
    <div class="container-fluid">
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
       <!-- <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0 bg-light" type="submit">Search</button>
       </form> -->
       <input type="hidden" name="" id="myaccount" value="<?php echo($_SESSION["userid"]); ?>">
       <h3 id="login"><a href="login.php"> Login</a></h3>
       <h3 id="account" style="display:none;"><a href="login.php" > My Account</a></h3>

     </div>

   </nav>

   <!-- navbar end -->
      <div class="row">
        <div class="col-md-10 col-11 mx-auto">
          <div class="row mt-5 gx-3">
            <!-- left side div -->
            <div
              class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow"
            >
            <?php
             $userid =$_SESSION["userid"];
                        include 'c.php';
                        $selp = "select * from cart where userid = '$userid'";
                        $ap = mysqli_query($con, $selp);
                        $num = mysqli_num_rows($ap);
                            ?>
              <h2 class="py-4 font-weight-bold">Cart (<?php echo $num;  ?> items)</h2>
              <div id="crt_table">
              <table class="table table-striped">
                <thead>
                  <th>Product Name</th>
                  <th>Image</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th>Delete Item</th>
                </thead>

                <tbody>
                    <?php 
                    include 'c.php';
                    $st=0;
                    $sel = "select * from cart where userid = '$userid'";
                    $ab = mysqli_query($con, $sel);
                    while ($rowr = mysqli_fetch_array($ab)) { 
                        $st=$st+($rowr['qut']*$rowr['price']);
                    }
                    ?>
                  <?php
                        include 'c.php';
                        $select = "select * from cart where userid = '$userid'";
                        $a = mysqli_query($con, $select);
                        // $num = mysqli_num_rows($qua);
                        while ($row = mysqli_fetch_array($a)) { 
                            ?>
                  <tr>
                    <td>
                      <?php echo $row['productname']; ?>
                    </td>
                    <td>
                      <img
                        src="<?php echo $row['productimg']; ?>"
                        style="width: 40px"
                      />
                    </td>
                    <td>
                      <form id="frm<?php echo $row['id'] ?>">
                        <input
                          type="hidden"
                          name="cart_id"
                          value="<?php  echo $row['id'];?>"
                        />
                        <input
                          type="number"
                          name="qty"
                          value="<?php echo $row['qut']; ?>"
                          onchange="updcart(<?php echo $row['id'];  ?>)"
                          onkeyup="updcart(<?php echo $row['id'];  ?>)"
                          style="width: 60px"
                        />
                      </form>
                    </td>
                    <td>
                      <?php echo $row['price']; ?>
                    </td>
                    <td>
                      <?php echo $row['qut']*$row['price']; 
                      ?>
                    </td>
                    <td>
                    <a href="cartdelete.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" title="delete"><img src="image/remove.svg" alt="" srcset="" style="width: 25px"></a></td>  
                    </td>
                  </tr>
                  <?php
              }
                        ?>
                  <tr>
                    <th colspan="5" style="text-align: right">Sub Total</th>
                    <th>
                      <?php
                      echo $st;?>
                    </th>
                  </tr>
                  <tr>
                    <td colspan="6" style="text-align: right">
                      <a href="checkout.php" class="btn btn-success"
                        >Checkout</a
                      >
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- footer -->
   <footer class="py-5 mb-2" id="footer">
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
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
    <script>
      function updcart(id) {
        $.ajax({
          url: "updqty.php",
          type: "POST",
          data: $("#frm" + id).serialize(),
          success: function (res) {
            $("#crt_table").html(res);
          },
        });
      }
    </script>
    >
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