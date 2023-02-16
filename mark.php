<?php
include 'connectr.php';
if(isset($_POST['b1'])){
    $subject=$_POST['sub'];
    $mark=$_POST['mark'];
mysqli_query($con,"INSERT INTO mark_tbl(subject,mark)VALUES('$subject','$mark')");
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
    <form>
   subject: <select name="sub">
     <option>maths</option>
     <option>physics</option>
    <option>chemistry</option>
    <option>biology</option>
</select><br><br>
mark: <input type="text"name="mark"><br> <br>
<button name="b1">submit</button>
</body>
</html>