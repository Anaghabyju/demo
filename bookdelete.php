<?php
include 'connectr.php';
$del=$_GET['uid'];
mysqli_query($con,"DELETE FROM book_tbl WHERE book_id='$del'");
header("location:book_tbl");
?>