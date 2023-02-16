<?php
include 'connectr.php';
if(isset($_POST['b1'])){
  $username=$_POST['user'];
  $password=$_POST['pass'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $district=$_POST['district'];
  $image=$_FILES['image']['name'];
  if($image != "")
  {
      $filearray=pathinfo($_FILES['image']['name']);
      $file1=rand();
      $file_ext=$filearray["extension"];

      $filenew=basename($_FILES['image']['name']);
      $target='C:/xampp/htdocs/demo/img/'.basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'],"$target");
  }

  mysqli_query($con,"INSERT INTO newlogin(username,password)VALUES('$username','$password')");
    $log=mysqli_insert_id($con);
    mysqli_query($con,"INSERT INTO newregistration(login_id,username,password,name,email,phone,gender,district,profile) VALUES('$log','$username','$password','$name','$email','$phone','$gender','$district','$filenew')");
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
          <a class="nav-link active" style="color:white;"aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="newregistration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="newlogin.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="profile.php">profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <form method="post"enctype="multipart/form-data">
 
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
    <label for="inputEmail3" class="col-sm-1 col-form-label">name</label>
    <div class="col-sm-4">
      <input type="name" class="form-control" id="inputEmail3"name="name">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:30%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">email</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputEmail3"name="email">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:30%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">phone</label>
    <div class="col-sm-4">
      <input type="tell" class="form-control" id="inputEmail3"name="phone">
    </div>
  </div>
  <fieldset class="row mb-3"style="margin-left:30%;">
   <legend class="col-form-label col-sm-1 pt-0">gender</legend>
   <div class="col-sm-4">
     <div class="form-check">
       <input class="form-check-input" type="radio" name="gender"  value="male" checked>
       <label class="form-check-label" for="gridRadios1">
         male
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="radio" name="gender"  value="female">
       <label class="form-check-label" for="gridRadios2">
        female
       </label>
     </div>
   
  
</fieldset>
 <div class="row mb-3"style="margin-left:30%;">
 <label for="inputEmail3" class="col-sm-1 col-form-label">district</label>
    <div class="col-sm-4">
    <select class="form-control"name="district">
  
  <option>kozhikode</option>
  <option>kannur</option>
  <option>malappuram</option>
</select>
    </div>
 
 
</div>
<div class="row mb-3"style="margin-left:30%;">
    <label for="inputEmail3" class="col-sm-1 col-form-label">profile</label>
    <div class="col-sm-4">
      <input type="file" class="form-control" id="inputEmail3"name="image">
    </div>
  </div>
<button type="submit" class="btn btn-danger"style="margin-left:40%;"name="b1">Sign in</button>

</form>