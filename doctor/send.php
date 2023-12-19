<?php

  include('db.php');
  $email=$_COOKIE['email'];
$id=$_GET['id'];
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

<div class="container">
<div class="row">
  
  <div class="col-sm-2">
     <div class="header">
    <div class="side-nav">
     
        <img src="doctor.jpg" class="logo-img">
        <br><br>
        
      
            <ul class="nav-links">
        <li><a href="">
            <i class="fa-solid fa-house-user"></i>
            <p>Dashboard</p>
          </a>
        </li>
       

        <li><a href="all.php">
            <i class="fa-solid fa-comment-dots"></i>
            <p>View Application</p>
          </a>
        </li>

       <li><a href="notes.php">
            <i class="fa-solid fa-comment-dots"></i>
            <p>View Prescription</p>
          </a>
        </li>


        
        
        </ul>

    </div>
  </div>
  </div>


   <div class="col-sm-10">

<div class="container">
    <div class="row">
    <?php

   $sql3="select pemail from appointment where pemail='$email'";
   $result=mysqli_query($con,$sql3);
   $all=mysqli_num_rows($result);

   $sql4="select pemail from appointment where pemail='$email' and notes=''";
   $result2=mysqli_query($con,$sql4);
   $new=mysqli_num_rows($result2);
   
  ?>
<div class="col-sm-6" style="background-color:lightgrey;">
  <div class="divv">
    <center>
    <h2>Total Appointments</h2>
    <h1> <?php echo $all; ?></h1>
      </center>
  </div>
</div>
<div class="col-sm-6" style="background-color:lightgrey;">
  <div class="divv">
    <center>
    <h2>New Appointments</h2>
    <h1> <?php echo $new; ?></h1>
    </center>
  </div>
</div>
<br><br>
</div>

</div>


<br><br>
<br>

<?php 

$result7 = mysqli_query($con,"SELECT * FROM appointment where id='$id'");
$row2 = mysqli_fetch_array($result7);
?>
   <form class="reg-page" method="post" action="" id="enquiryForm" enctype='multipart/form-data'>

                <input type="hidden" value="<?php echo  $id ?>" name="id5">

                <div class="row">
                    <div class="col-sm-12">

                        <label>Name <span class="color-red">*</span></label><br>
                        <input type="text" value="<?php echo  $row2['pname'] ?>" name="pname" id="email"  class="form-control" required><br><br>
                        <span class="text-danger" id="err_email"></span>
                    </div>

                  
                    <div class="col-sm-12">
                     
                        <label>address<span class="color-red">*</span></label><br>
                        <textarea name="paddress"  id="text" class="form-control margin-bottom-10" onblur="emptyField(this.id)" required><?php echo  $row2['pname'] ?></textarea> <br><br>
                        <span class="text-danger" id="err_text"></span>
                    </div>

                
                    <div class="col-sm-12">
                        <label>Description <span class="color-red">*</span></label><br>
                        <textarea name="pdescription" id="text" class="form-control margin-bottom-10" onblur="emptyField(this.id)" required><?php echo  $row2['pdescription'] ?></textarea><br><br>
                        <span class="text-danger" id="err_text"></span>
                    </div>

                    <div class="col-sm-12">

                      <label>Reference Medical <span class="color-red">*</span></label><br>
                      <input type="text"  name="medical" id="email"  class="form-control" required><br><br>
                      <span class="text-danger" id="err_email"></span>
                    </div>

                    <div class="col-sm-12">
                        <label>Prescription <span class="color-red">*</span></label><br>
                        <textarea name="notes" id="text" class="form-control margin-bottom-10" required></textarea><br><br>
                        <span class="text-danger" id="err_text"></span>
                    </div>

                    <div class="col-sm-12">
                        <label><span class="color-red"></span></label>
                        <button type="submit" name="sends" class="btn btn-primary btn-block" style="margin-top:2px;background-color:blue;">Submit</button>
                        <span class="text-danger" id="err_name"></span>
                    </div>
                   
                    
                </div>
                <hr>
                <br />
            </form>
</div>

<?php 
if(isset($_POST['sends']))
{

$id=$_POST['id5'];
$medical=$_POST['medical'];
$notes=$_POST['notes'];
$status="Prescription Received";

  $sql15="update appointment  set medical='$medical', notes='$notes',status='$status' where id='$id'" ;
   if(mysqli_query($con,$sql15))
   {
     echo "<script>alert('Prescription Sented Succesfull'); window.location.replace('new.php');</script>";
   }
   else
   {
      echo "Not inseerted";
   }
}
        
          
?>

  
  


  </div>


</body>
</html>

      
    </body>
</html>
</body>
</html>
