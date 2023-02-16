<?php
include'connectr.php';
if(isset($_POST['b1'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $name=$_POST['name'];
    $designation=$_POST['dis'];
    $date=$_POST['date'];
    $gender=$_POST['gender'];
    mysqli_query($con,"INSERT INTO newemployee(username,password,name,designation,join_date,gender)VALUES('$username','$password','$name','$designation','$date','$gender')");
}
?>

<!doctype html>
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
          <a class="nav-link"style="color:white;" href="viewsalary">view salary</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <form method="post">
 
  <div class="row mb-3"style="margin-top:5%;margin-left:30%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">username</label>
    <div class="col-sm-4">
      <input type="name" class="form-control" id="inputEmail3"name="user">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:30%;">
    <label for="inputPassword3" class="col-sm-1 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword3"name="pass">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:30%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">employee name</label>
    <div class="col-sm-4">
      <input type="name" class="form-control" id="inputEmail3"name="name">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:30%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">designation</label>
    <div class="col-sm-4">
      <input type="tell" class="form-control" id="inputEmail3"name="dis">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:30%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">joining date</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="inputEmail3"name="date">
    </div>
  </div>
  <fieldset class="row mb-3"style="margin-left:30%;">
    <legend class="col-form-label col-sm-1 pt-0">gender</legend>
    <div class="col-sm-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
         female
        </label>
      </div>
    
   
 </fieldset>

<button type="submit" class="btn btn-danger"style="margin-left:40%;"name="b1">Sign in</button>

</form>