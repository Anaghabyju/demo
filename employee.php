<?php
include 'connectr.php';
if(isset($_POST['b1'])){
    $name=$_POST['e1'];
    $des=$_POST['d1'];
    $date=$_POST['j1'];
    $age=$_POST['a1'];
    $gender=$_POST['g1'];
    $district=$_POST['s1'];
    mysqli_query($con,"INSERT INTO employee_tbl(employee_name,designation,joining_date,age,gender,district)VALUES('$name','$des','$date','$age','$gender','$district')");
   header("location:emp_tbl.php");
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
    employee name: <input type="text"name="e1"><br><br>
    designation: <input type="text"name="d1"><br><br>
    joining date: <input type="date"name="j1"><br><br>
    age: <input type="text"name="a1"><br><br>
    gender: <input type="radio" name="g1"value="male">male 
            <input type="radio" name="g1"value="female">female <br><br>
   district: <select name="s1">
       <option>kozhikode</option>
        <option>kannur</option>
        <option>malappuram</option>

    </select><br><br>
    <button name="b1">submit</button>
   </form> 
</body>
</html>