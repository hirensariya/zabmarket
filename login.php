<?php
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
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="media.css">
  <title>Hello, world!</title>
</head>

<body>
  <form class="form-signin" method="POST">
    <div class="text-center mb-4">
      <img class="mb-4" src="z.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Zabmarket.in</h1>
      <!-- <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p> -->
    </div>

    <div class="form-label-group">
      <input type="email" id="inputuser" class="form-control" placeholder="" name="email" required="" autofocus="">
      <label for="inputEmail">User name</label>
    </div>

    <div class="form-label-group">
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
      <label for="inputPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>

    <a href="register.php" id="register">for new register</a>

    <p class="mt-5 mb-3 text-muted text-center">© Zabmarket</p>
  </form>
  


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="demo.js"></script>
</body>

</html>
<?php
include 'c.php';

$num = mysqli_num_rows($quary);
$selectquery = "select * from r";
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $email_searche="select * from r where email='$email' ";
  $quary = mysqli_query($con,$email_searche);

  $email_count = mysqli_num_rows($quary);

$quary = mysqli_query($con,$selectquery);

while($res=mysqli_fetch_array($quary))
{
  if($password==$res['password'])
  {
    echo("suceess full");
    ?>
    <script>
    location.replace('index.php');
    document.getElementById('.a1').innerHTML ='Myaccount';
    </script>
    <?php
  }else{
    ?>
    <script>
    alert ('password inccorect');
    </script>
    <?php
  }
}
}



?>