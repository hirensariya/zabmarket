<?php
include 'c.php';

$id =$_GET['id'];

echo ("$id");

$delete = "delete from product where id = $id";

$quary= mysqli_query($con,$delete);
header("Location:dashboard.php");
?>