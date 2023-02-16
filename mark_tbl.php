<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM mark_tbl INNER JOIN student_tbl ON mark_tbl.mark_id=student_tbl.mark_id");
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
        <th>subject</th>
        <th>mark</th>
    </tr>
    <?php
    while($var=mysqli_fetch_assoc($data)){?>
    <tr>
        <td><?php echo['subject']?></td>
        <td><?php echo['mark']?></td>
    </tr>
    <?php
    }?>
 </table>   
</body>
</html>