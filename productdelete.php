<?php
include 'connectr.php';
$del=$_GET['uid'];
mysqli_query($con,"DELETE FROM product_tbl WHERE product_id='$del'");
header("location:product_tbl.php");
?>