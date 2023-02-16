<?php
include 'connectr.php';
$del=$_GET['uid'];

if(isset($_POST['b1'])){
    $product=$_POST['p1'];
    $price=$_POST['r1'];
    $quantity=$_POST['q1'];
    $expire=$_POST['e1'];
    $avail=$_POST['a1'];
    $data= mysqli_query($con,"SELECT * FROM product_tbl");
    $var= mysqli_fetch_assoc($data);
    mysqli_query($con,"UPDATE product_tbl SET product_name ='$product',price='$price',quantity='$quantity',expire='$expire',availability='$avail' WHERE product_id='$del'");
  
   header("location:product_tbl.php");
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
        product name: <input type="text"name="p1" value="<?php echo $var['product_name']?>"><br><br>
        price: <input type="text"name="r1"value="<?php echo $var['price']?>"><br><br>
        quantity: <input type="text"name="q1"value="<?php echo $var['quantity']?>"><br><br>
        expire: <input type="text"name="e1"value="<?php echo $var['expire']?>"><br><br>
        availability: <input type="text"name="a1"value="<?php echo $var['availability']?>"><br><br>
        <button name="b1">submit</button>

</body>
</html>
