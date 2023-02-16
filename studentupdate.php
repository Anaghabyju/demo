<?php
include 'connectr.php';
if(isset($_POST['button'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    mysqli_query($con,"UPDATE student_tbl SET name='$name'age='$age'dob='$dob'");
    header("location:student_tbl.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post">
    name: <input type="text"name="name"><br><br>
    age: <input type="text"name="age"><br><br>
    dob: <input type="date"name="dob"><br><br>
    <button name="button">submit</button>  
</body>
</html>