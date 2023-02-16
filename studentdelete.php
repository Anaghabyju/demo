<?php
include 'connectr.php';
$del=$_GET['uid'];
mysqli_query($con,"DELETE FROM student_tbl WHERE student_id='$del'");
header("location:student_tbl.php");
?>



