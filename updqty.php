<?php
session_start();
include("c.php");
// extract($_Post);
$cartid=$_POST['cart_id'];
$qty=$_POST['qty'];

$upd="UPDATE cart SET qut='$qty' WHERE id='$cartid'";
$b = mysqli_query($con, $upd);

?>

<table class="table table-striped">
    
                <thead>
                  <th>Product Name</th>
                  <th>Image</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                </thead>

                <tbody>
                <?php 
                    include 'c.php';
                    $userid =$_SESSION["userid"];
                    $st=0;
                    $sel = "select * from cart where userid = '$userid'";
                    $ab = mysqli_query($con, $sel);
                    while ($rowr = mysqli_fetch_array($ab)) { 
                        $st=$st+($rowr['qut']*$rowr['price']);
                    }
                    ?>
                  <?php
 include 'c.php';
 $select = "select * from cart where userid='$userid'";
 $a = mysqli_query($con, $select);
 $p="select sum(price)
 FROM cart";
 $b = mysqli_query($con, $select);
 $c = mysqli_fetch_array($b);

 // $num = mysqli_num_rows($qua);
 while ($row = mysqli_fetch_array($a)) { ?>
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
                      <?php echo $row['qut']*$row['price']; ?>
                    </td>
                  </tr>
                  <?php
    }
      ?>
                  <tr>
                    <th colspan="4" style="text-align: right">Sub Total</th>
                    <th>
                      <?php  echo $st;?>
                    </th>
                  </tr>
                  <tr>
                    <td colspan="5" style="text-align: right">
                      <a href="checkout.php" class="btn btn-success"
                        >Checkout</a
                      >
                    </td>
                  </tr>
                </tbody>
              </table>