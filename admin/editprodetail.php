<?php
include 'c.php';
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}

$cat=$_POST['cat'];
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$price=$_POST['pprice'];
$dis=$_POST['pdis'];
$fn=$_FILES['pimg']['name'];
$buf=$_FILES['pimg']['tmp_name'];
move_uploaded_file($buf, "image/".$fn);


$in = "UPDATE product SET image='image/$fn',name='$pname',price='$price',cat='$cat',dis='$dis' WHERE id='$pid'";
$res = mysqli_query($con,$in);
if($res>0)
{
?>
<Script>
alert("SuccessFully update");
location.replace("dashboard.php")
</Script>
<?php
}
else{
    echo("error");
  ?>
  <Script>
  alert("Error in  Update");
  </Script>
  <?php
}
?>