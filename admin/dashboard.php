<?php
session_start();
include 'c.php';
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
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

      <!-- table -->
      <div class="container-fluid">
        <div class="container">
        <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Item no.</th>
                            
                            <th scope="col">Product Id</th>
                            <th scope="col">Product image</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Product price</th>
                            <th scope="col">Product category</th>
                            <th scope="col">Product description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delet</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=0;
                            $select = "select * from product";
                            $a = mysqli_query($con, $select);
                            while ($row = mysqli_fetch_array($a)) { 
                            ?>
                        <tr>
                            <th scope="row">
                                <?php echo ($no);?>
                            </th>
                            <td>
                                <?php echo ($row['id']);?>
                            </td>
                            <td>
                            <img
                        src="<?php echo $row['image']; ?>"
                        style="width: 40px"
                      />
                            </td>
                            <td>
                                <?php echo ($row['name']);?>
                            </td>
                            <td>
                                <?php echo ($row['price']);?>
                            </td>
                            <td>
                                <?php echo ($row['cat']);?>
                            </td>
                            <td>
                                <?php echo ($row['dis']);?>
                            </td>
                            <td>
                                <a href="editpro.php?id=<?php echo $row['id']; ?>">Edit</a>
                            </td>
                            <td>
                            <a href="deletpro.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" title="delete"><img src="image/remove.svg" alt="" srcset="" style="width: 25px"></a></td>
                            </td>
                        </tr>
                        <?php  $no++;}?>

                    </tbody>
                </table>
        
        </div>
      </div>



      <!-- table -->



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