<?php 
include 'connectr.php';
$data=mysqli_query($con,"SELECT name FROM newemployee");
if(isset($_POST['b1'])){
    $name=$_POST['name'];
    $salary=$_POST['salary'];
mysqli_query($con,"INSERT INTO salary(name,salary)VALUES('$name','$salary')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"style="background-color:black;">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="addemployee.php">add employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="viewemployee.php">view employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="addsalary.php">add salary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="viewsalary.php">view salary</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
<form method="post">
<div class="row mb-3"style="margin-left:40%;margin-top:5%;">
 <label for="inputEmail3" class="col-sm-2 col-form-label">emplyee name</label>
    <div class="col-sm-4">
    <select class="form-control" name="name">
  
  <option>select employee</option>
  <?php
  while($var=mysqli_fetch_assoc($data)){?>
  <option><?php echo $var['name']?></option>
  <?php
  }?>
</select>

    </div>
 </div>

 <div class="row mb-3"style="margin-left:40%;">
   <label for="inputEmail3" class="col-sm-2 col-form-label">salary</label>
   <div class="col-sm-4">
     <input type="name" class="form-control" id="inputEmail3"name="salary">
   </div>
 </div>
<button type="submit" class="btn btn-danger"style="margin-left:45%;margin-top:4%;"name="b1">ADD</button>

 
</body>
</html>