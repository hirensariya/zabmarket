<?php
include 'c.php';
session_start();
session_destroy();
?>
<Script>
alert("SuccessFully Logout");
location.replace("index.php")
</Script>