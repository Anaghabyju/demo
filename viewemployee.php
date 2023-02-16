<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM newemployee");
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
          <a class="nav-link"style="color:white;" href="viewsalary.php">view salary</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="content">
      <div class="container-fluid">
        <div class="row"style="margin-top:5%;">
          <div class="col-md-3">
            <!-- <div class="card"> -->
             
              <!-- /.card-header -->
              <div class="card-body">
<table class="table table-bordered">
 <thead>
  <tr>
    <th>name</th>
   
    <th>view</th>
  </tr>
  <?php
  while($var=mysqli_fetch_assoc($data)){?>
   </thead>
    <tbody>
  <tr>
    <td><?php echo $var['name']?></td>
    <td><a href="viewemp.php?id=<?php echo $var['emp_id']?>">view</a></td>
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