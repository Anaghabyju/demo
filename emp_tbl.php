<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM employee_tbl");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td{border:1px solid black;
               border-collapse:collapse;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table>
    <tr>
        <th>emplyee name</th>
        <th>designation</th>
        <th>joining date</th>
        <th>age</th>
        <th>gender</th>
        <th>district</th>
        <th>action</th>
        <th>update</th>
    </tr>
    <?php
    while($var=mysqli_fetch_assoc($data)){?>
    <tr>
        <td><?php echo $var['employee_name']?></td>
        <td><?php echo $var['designation']?></td>
        <td><?php echo $var['joining_date']?></td>
        <td><?php echo $var['age']?></td>
        <td><?php echo $var['gender']?></td>
        <td><?php echo $var['district']?></td>
        <td><a href="empdelete.php?uid=<?php echo $var['emp_id']?>">delete</a></td>
        <td><a href="empupdate.php?uid=<?php echo $var['emp_id']?>">edit</a></td>
    </tr>
    <?php
    }?>
   </table><br><br>
  <button><a href="employee.php">click</a></button> 
</body>
</html>