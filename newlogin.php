<?php
session_start();
include 'connectr.php';
if(isset($_POST['b1'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
   $data= mysqli_query($con,"SELECT * FROM newlogin WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($data)>0){
        header("location:newemployee.php");
        $_SESSION['log']=$data['login_id'];
    }
    else {
        echo "<script>alert('invalid email or password')</script>";
     }
}

?>

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
          <a class="nav-link active" style="color:white;"aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="newregistration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="newlogin.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="#profile.php">profile</a>
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
  <a href="newregistration.php"style="margin-left:45%;">new registration</a><br><br>
<button type="submit" class="btn btn-danger"style="margin-left:45%;"name="b1">login</button>


</form>