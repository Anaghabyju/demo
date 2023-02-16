<?php
include 'connectr.php';
if(isset($_POST['button'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $subject=$_POST['subj'];
    $mark=$_POST['mark'];
    mysqli_query($con,"INSERT INTO mark_tbl(subject,mark)VALUES('$subject','$mark')");
    mysqli_query($con,"INSERT INTO student_tbl(name,age,dob)VALUES('$name','$age','$dob')");
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
    subject: <select name="sub">
     <option>maths</option>
     <option>physics</option>
    <option>chemistry</option>
    <option>biology</option>
</select><br><br>
mark: <input type="text"name="mark"><br> <br>
    <button name="button">submit</button>  
</body>
</html>