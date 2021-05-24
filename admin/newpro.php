<?php
include 'c.php';
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}

$cat=$_POST['cat'];
$pname=$_POST['pname'];
$price=$_POST['pprice'];
$dis=$_POST['pdis'];
$fn=$_FILES['pimg']['name'];
$buf=$_FILES['pimg']['tmp_name'];
move_uploaded_file($buf, "image/".$fn);

$in = "insert into product (image,name,price,cat,dis) VALUES ('image/$fn', '$pname', '$price', '$cat', '$dis');";
$res = mysqli_query($con,$in);
header("location:addpro.php");

?>