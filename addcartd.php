<?php 

session_start();
include 'c.php';
$proid =$_GET['id'];
$userid =$_SESSION["userid"];

$selectc = "select * from cart where proid='$proid' and userid= '$userid' ";
$quac= mysqli_query($con, $selectc);
$numc = mysqli_num_rows($quac);
echo($numc);

if($numc<=0){

if($userid>0)
{
    if($proid>0)
    {
        $select = "select * from product where id ='$proid' ";
$qua = mysqli_query($con, $select);
$num = mysqli_num_rows($qua);
$re = mysqli_fetch_array($qua);


$productimg=$re['image'];
$productname=$re['name'];
$qut=1;
$price=$re['price'];


$sql = "INSERT INTO cart (proid,productimg, productname ,qut ,price ,userid)
VALUES ('$proid','$productimg', '$productname', '$qut', '$price', '$userid')";
$quan = mysqli_query($con, $sql);
$numn = mysqli_num_rows($qua);

?>
<Script>
alert("product SuccessFully Added In Cart");
location.replace("index.php")
</Script>
<?php

    }
    else{?>
       
            <script>
        alert("Product is not avaliable .");
        location.replace("dress.php");
        </script>
  <?php
    }
} 
else
{
   ?>
        <script>
    alert("Please Login..");
    location.replace("dress.php");
    </script>

<?php
}
}else{

    ?>
    <script>
    alert("Product Is Already In Cart..");
location.replace("dress.php");
    </script>
    <?php
}


?>