<?php
include 'c.php';
session_start();

$userid=$_SESSION["userid"];
$fristname = $_POST['first'];
$lastname = $_POST['last'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['password'];
$address = $_POST['address'];
$address2 = $_POST['address2'];

$in = "UPDATE r SET frist_name='$fristname',last_name='$lastname',email='$email',phone='$phone',password='$pass',address='$address',address2='$address2' WHERE id='$userid'";
$res = mysqli_query($con,$in);
if($res>0)
{
?>
<Script>
alert("SuccessFully update");
location.replace("myaccount.php")
</Script>
<?php
}
else{
  ?>
  <Script>
  alert("Error in  Register");
  </Script>
  <?php
}



?>