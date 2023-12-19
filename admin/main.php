<?php

  include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clinical Service Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    *
    {
      margin: 0;
      padding: 0;
      font-family: tahoma;
    }
.card {
  box-shadow: 0 4px 8px 0 black;
  transition: 0.3s;
  width: 100%;
  align-content: center;
  border-radius: 5px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 black;
}
img {
  border-radius: 5px 5px 0 0;
  width: 300px;
  height: 250px;

}
.container {
  padding: 2px 16px;
}

@media all and (max-width: 767px) {
   .col-sm-1, .col-sm-2, .col-sm-3, 
   .col-sm-4, .col-sm-5, .col-sm-6,
   .col-sm-7, .col-sm-8, .col-sm-9,
   .col-sm-10, .col-sm-11 {
      margin-bottom: 20px;
   }
}
.clr
{
color: red;
}
a:hover{
  text-decoration: none;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.header {
  width: 100%;
  height: 100vh;
  background: #ccffff;
}

.side-nav {
  width: 250px;
  height: 100%;
  background: lightgrey;
  position: fixed;
  top: 0;
  left: 0;
  padding: 20px 30px;
}

.logo {
  display: block;
  margin-bottom: 130px;
}

.logo-img {
  width: 170px;
  margin-top: 20px;
}

.nav-links {
  list-style: none;
  position: relative;
}

.nav-links li {
  padding: 10px 0;
}

.nav-links li a {
  color: #000000;
  text-decoration: none;
  padding: 10px 14px;
  display: flex;
  align-items: center;
}

.nav-links li a i {
  font-size: 22px;
  margin-right: 20px;
}

.active {
  background: #000000;
  width: 100%;
  height: 47px;
  position: absolute;
  left: 0;
  top: 2.6%;
  z-index: -1;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(255, 255, 255, 0.4);
  display: none;
  transition: top 0.5s;
}


</style>


</head>
<body style="background-color:white;">

  <div class="container-fluid">
<div class="row">
  
  <div class="col-sm-2">
     <div class="header">
    <div class="side-nav">
     
        <img src="admin.jpg" class="logo-img">
        <br><br>

      
           <ul class="nav-links">
        <li><a href="">
            <i class="fa-solid fa-house-user"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li><a href="adddoctor.php">
            <i class="fa-solid fa-comment-dots"></i>
            <p>Add Doctor</p>
          </a>
        </li>

        <li><a href="managedoctor.php">
            <i class="fa-solid fa-comment-dots"></i>
            <p>Manage Doctor</p>
          </a>
        </li>

        
        <li><a href="users.php">
            <i class="fa-solid fa-user"></i>
            <p>View Users</p>
          </a>
        </li>
         
        
       
        <div class="active"></div>
      </ul>
    </div>
  </div>
  </div>

   <div class="col-sm-10">

   <!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    *
    {
      margin: 0;
      padding: 0;
      font-family: tahoma;
    }
.card {
  box-shadow: 0 4px 8px 0 black;
  transition: 0.3s;
  width: 100%;
  align-content: center;
  border-radius: 5px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 black;
}
img {
  border-radius: 5px 5px 0 0;
  width: 300px;
  height: 250px;

}
.container {
  padding: 2px 16px;
}

@media all and (max-width: 767px) {
   .col-sm-1, .col-sm-2, .col-sm-3, 
   .col-sm-4, .col-sm-5, .col-sm-6,
   .col-sm-7, .col-sm-8, .col-sm-9,
   .col-sm-10, .col-sm-11 {
      margin-bottom: 20px;
   }
}
.clr
{
color: red;
}
a:hover{
  text-decoration: none;
}

.imgg
{
  width: 100%;
  height: 300px;
}

</style>


</head>
<body >

<div class=" text-center" style="">
  <h1 class="clr">Admin- Managers/Chief Doctors <a href="../index.php" class="btn btn-success" style="float:right;">Logout</a></h1>
 
<hr>
</div>
<center>
<div class="container-fluid">
    <?php
   $sql3="select email from doctors";
   $result=mysqli_query($con,$sql3);
   $doctors=mysqli_num_rows($result);

   $sql4="select email from users";
   $result2=mysqli_query($con,$sql4);
   $users=mysqli_num_rows($result2);
   

  ?>
<div class="col-sm-6" style="background-color:lightgrey;">
  <div class="divv">
    <center>
    <h2>Doctors Count</h2>
    <h1> <?php echo $doctors; ?></h1>
      </center>
  </div>
</div>
<div class="col-sm-6" style="background-color:lightgrey;">
  <div class="divv">
    <center>
    <h2>Users Count</h2>
    <h1> <?php echo $users; ?></h1>
    </center>
  </div>
</div>
<br><br>
</div>

<img src="admin.jpg" class="img img-responsive" style="width: 50vw;height: 50vh;">
</center>
  </div>
  



</body>
</html>

      
    </body>
</html>
</body>
</html>
