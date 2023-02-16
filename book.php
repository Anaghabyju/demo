<?php
include 'connectr.php';
if(isset($_POST['b1'])){
    $name=$_POST['name'];
    $author=$_POST['author'];
    $price=$_POST['price'];
    mysqli_query($con,"INSERT INTO book_tbl(book_name,auther_name,price)VALUES('$name','$author','$price')");
    header("location:book_tbl.php");
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
    book name: <input type="text"name="name"><br><br>
    author name: <input type="text"name="author"><br><br>
    price: <input type="text"name="price"><br><br>
    <button name="b1">submit</button>
</body>
</html>