<?php
include 'c.php';

$id =$_GET['id'];

echo ("$id");

$delete = "delete from cart where id = $id";

$quary= mysqli_query($con,$delete);
header("Location:cart.php");
?>