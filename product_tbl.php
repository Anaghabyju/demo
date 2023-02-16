<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM product_tbl");
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
            <th>product name</th>
            <th>price</th>
            <th>quantity</th>
            <th>expire</th>
            <th>availability</th>
            <th>action</th>
            <th>update</th>
        </tr>
        <?php
        while($var=mysqli_fetch_assoc($data)){?>
        <tr>
            <td><?php echo $var['product_name']?></td>
            <td><?php echo $var['price']?></td>
            <td><?php echo $var['quantity']?></td>
            <td><?php echo $var['expire']?></td>
            <td><?php echo $var['availability']?></td>
            <td><a href="productdelete.php?uid=<?php echo $var['product_id']?>">delete</a></td>
            <td><a href="productupdate.php?uid=<?php echo $var['product_id']?>">edit</a></td>
        </tr>

            
            
        <?php
        }?>
     </table><br>
      <a href="product.php"><button>click</a></button>
</body>
</html>