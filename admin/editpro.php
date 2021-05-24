<?php
session_start();
include 'c.php';
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}

$id=$_GET['id'];
$select = "select * from product where id =$id";
$a = mysqli_query($con, $select);
$row = mysqli_fetch_array($a)
?>

 <!doctype html>
 <html lang="en">

 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="shop.html">
   <link rel="stylesheet" href="media.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha256-fDncdclXlALqR3HOO34OGHxek91q8ApmD3gGldM+Rng=" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha256-2DoaRRHfHWna6mpfGImxAx/cu0vFGpqEkcf/YXf+yk4=" crossorigin="anonymous" />
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="media.css">
   <!-- <link rel="stylesheet" href="bar.css"> -->

   <title>Welcome To Zabmarket</title>
 </head>

 <body>
<!-- nav bar -->
 <?php include './part/menu.php';?>
 <!-- nav bar -->




  <!-- add product -->

  <div class="container">
            <div class="py-5 text-center" id="l">
                <img class="d-block mx-auto mb-4" src="image/z.svg" alt="" width="72" height="72">
                <h2>zabmarket.in</h2>
            </div>

            <div class="row">
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Add Product</h4>
                    <form class="needs-validation" novalidate="" action="editprodetail.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                        <input type="hidden" name="pid" value="<?php echo ($row['id']);?>">
                            <label for="">Product Image</label>
                          <input type="file" name="pimg" class="form-control" value="<?php echo ($row['image']);?>">
                        </div>
                        <div class="mb-3">
                            <label for="cat">Product Category</label>
                            <select name="cat" class="form-control">
                              <option value="<?php echo ($row['cat']);?>"><?php echo ($row['cat']);?></option>
                              <option value="Electronics">Electronics</option>
                              <option value="Cover">Cover</option>
                              <option value="Dress">Dress</option>
                              </select>
                             <div class="invalid-feedback">
                                Please enter Product Name
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="pname" name="pname" placeholder="Product name" autofocus="" required="" value="<?php echo ($row['name']);?>">
                            <div class="invalid-feedback">
                                Please enter Product Name
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" name="pprice" id="pprice" required="" autofocus="" value="<?php echo ($row['price']);?>">
                            <div class="invalid-feedback">
                                Please enter product price.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Password">Procduct Discription</label>
                            <input type="text" class="form-control" id="pdis" name="pdis" required="" autofocus="" value="<?php echo ($row['dis']);?>">
                            <div class="invalid-feedback">
                                Please enter your Password.
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" name="singup" type="submit">Edit Product</button>
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
  <!-- add product -->



  
 <!-- footer -->

 <?php include './part/footer.php';?>
 <!-- footer -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
   <script src="demo.js"></script>
   <script src="temp.js"></script>
</body>

 </html>