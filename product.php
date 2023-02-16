<?php
include 'connectr.php';
if(isset($_POST['b1'])){
    $product=$_POST['p1'];
    $price=$_POST['r1'];
    $quantity=$_POST['q1'];
    $expire=$_POST['e1'];
    $avail=$_POST['a1'];
    mysqli_query($con,"INSERT INTO product_tbl(product_name,price,quantity,expire,availability)VALUES('$product','$price','quantity','$expire','$avail')");
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
        product name: <input type="text"name="p1"><br><br>
        price: <input type="text"name="r1"><br><br>
        quantity: <input type="text"name="q1"><br><br>
        expire: <input type="text"name="e1"><br><br>
        availability: <input type="text"name="a1"><br><br>
        <button name="b1">submit</button>

</body>
</html>

