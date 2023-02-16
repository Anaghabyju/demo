<?php
include 'connectr.php';
$del=$_GET['uid'];
mysqli_query($con,"DELETE FROM employee_tbl WHERE emp_id='$del' ");
header("location:emp_tbl.php");
?>