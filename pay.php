
<?php
session_start();
include 'c.php';
$st=0;
$userid=$_SESSION["userid"];
$sel = "select * from cart where userid = '$userid'";
$ab = mysqli_query($con, $sel);
$num = mysqli_num_rows($ab);
while ($rowr = mysqli_fetch_array($ab)) { 
    $st=$st+($rowr['qut']*$rowr['price']);
}


    $name = $_POST['firstName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];


     $_SESSION["oname"] =$name;
     $_SESSION["ophone"] =$phone;
     $_SESSION["oaddress"] =$address;
     $_SESSION["oaddress2"] =$address2;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_f4bbc56cf7ed8b53e2b7bf0940e",
                  "X-Auth-Token:test_04f795951c48bb0d5cabdf2c2de"));
$payload = Array(
    'purpose' => 'Buy',
    'amount' => $st,
    'phone' => $phone,
    'buyer_name' => $name,
    'redirect_url' => 'http://localhost:8080/zabmarket/thank.php',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
$_SESSION['tid']=$response->payment_request->id;
header('location:'.$response->payment_request->longurl);
die();
echo $response;

?>