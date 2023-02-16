<?php
session_start();
include 'connectr.php';
$del=$_SESSION['log'];
$data=mysqli_query($con,"SELECT * FROM newregistration WHERE login_id='$del'");

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
          <a class="nav-link active" style="color:white;"aria-current="page" href="">Home</a>
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

<section class="content">
      <div class="container-fluid">
        <div class="row"style="margin-top:5%;">
          <div class="col-md-6">
            <!-- <div class="card"> -->
             
              <!-- /.card-header -->
              <div class="card-body">
<table class="table table-bordered">
 <thead>
  <?php
  while($var=mysqli_fetch_assoc($data)){?>
   </thead>
    <tbody>
  <tr>
    <img src="./img/<?php echo $var['profile']?> "height='40px'width='40px'><br>
    name:<?php echo $var['name']?><br>
  email:<?php echo $var['email']?><br>
  phone:<?php echo $var['phone']?><br>
  gender:<?php echo $var['gender']?><br>
 district:<?php echo $var['district']?><br>
  </tr>
  <?php
  }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section> 
</body>
</html>