<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM book_tbl");
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
            <th>book name</th>
            <th>author name</th>
            <th>price</th>
            <th>action</th>
            <th>update</th>
        </tr>
        <?php
        while($var=mysqli_fetch_assoc($data)){?>
        <tr>
            <td><?php echo $var['book_name']?></td>
            <td><?php echo $var['auther_name']?></td>
            <td><?php echo $var['price']?></td>
            <td><a href="bookdelete.php?uid=<?php echo $var['book_id']?>">delete</td>
            <td><a href="bookupdate.php?uid=<?php echo $var['book_id']?>">edit</td> 
        </tr>
      <?php
        }?>
    </table><br>
    <button><a href="book.php">click</button>
</body>
</html>