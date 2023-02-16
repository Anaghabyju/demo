<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM student_tbl");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td{
            border:1px solid black;
            border-collapse:collapse;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>student name</th>
            <th>age</th>
            <th>dob</th>
            <th>action</th>
            <th>update</th>
        </tr>
        <?php
        while($var=mysqli_fetch_assoc($data)){?>
        <tr>
            <td><?php echo $var['name']?></td>
            <td><?php echo $var['age']?></td>
            <td><?php echo $var['dob']?></td>
            <td><a href="studentdelete.php?uid=<?php echo $var['student_id']?>">delete</td>
            <td><a href="studentdelete.php?uid=<?php echo $var['student_id']?>">edit</td>
        </tr>
        <?php
        }?>
    </table><br>
    <button><a href="student.php">click</a></button>
</body>
</html>