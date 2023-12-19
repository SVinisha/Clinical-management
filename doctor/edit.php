<?php

  include('db.php');
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
     
        <img src="admin.jpg" class="logo-img">
        <br><br>
<center><p style="color:white"> <b>Mental Tracker</b></p></center>

      
           <ul class="nav-links">
        <li><a href="main.php">
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
        <li><a href="logout.php">
            <i class="fa-solid fa-user"></i>
            <p>Logout</p>
          </a>
        </li>
        
        
       
        <div class="active"></div>
      </ul>
    </div>
  </div>
  </div>

   <div class="col-sm-10">



<br><br>
<center><h3 style="">Add Doctors</h3></center>
<br>
<?php
 $sql1="select * from doctors where id='$id'";
 $result=mysqli_query($con,$sql1);
$row = mysqli_fetch_array($result)
 ?>
   <form class="reg-page" method="post" action="" id="enquiryForm" enctype='multipart/form-data'>


                <div class="row">
                    <div class="col-sm-12">
                        <label>Dr. Name <span class="color-red">*</span></label><br>
                        <input type="text" name="doctor_name1" value="<?php echo $row['doctor_name'] ?>" id="email"  class="form-control" required><br><br>
                        <span class="text-danger" id="err_email"></span>
                    </div>

                    <div class="col-sm-12">
                        <label>Education <span class="color-red">*</span></label><br>
                        <input type="text" name="education1" value="<?php echo $row['education'] ?>" id="email"  class="form-control" required><br><br>
                        <span class="text-danger" id="err_email"></span>
                    </div>

                    <div class="col-sm-12">
                        <label>Experiance <span class="color-red">*</span></label><br>
                        <input type="number" name="experience1" value="<?php echo $row['experience'] ?>" id="email"  class="form-control" required><br><br>
                        <span class="text-danger" id="err_email"></span>
                    </div>

                    <div class="col-sm-12">
                        <label>Phone <span class="color-red">*</span></label><br>
                        <input type="number" name="mobile1" value="<?php echo $row['mobile'] ?>" id="email"  class="form-control" required><br><br>
                        <span class="text-danger" id="err_email"></span>
                    </div>

                    <div class="col-sm-12">
                        <label>Email <span class="color-red">*</span></label><br>
                        <input type="text"  name="email1" value="<?php echo $row['email'] ?>" id="email"  class="form-control" required><br><br>
                        <span class="text-danger" id="err_email"></span>
                    </div>

                    <div class="col-sm-12">
                        <label>Password <span class="color-red">*</span></label><br>
                        <input type="text" name="password1" value="<?php echo $row['password'] ?>" id="email"  class="form-control" required><br><br>
                        <span class="text-danger" id="err_email"></span>
                    </div>


                    <div class="col-sm-12">
                     
                        <label>address<span class="color-red">*</span></label><br>
                        <textarea name="address1" id="text" class="form-control margin-bottom-10" onblur="emptyField(this.id)" required><?php echo $row['address'] ?></textarea><br><br>
                        <span class="text-danger" id="err_text"></span>
                    </div>

                    <div class="col-sm-12">
                        <label>Description <span class="color-red">*</span></label><br>
                        <textarea name="description1" id="text" class="form-control margin-bottom-10" onblur="emptyField(this.id)" required><?php echo $row['description'] ?></textarea><br><br>
                        <span class="text-danger" id="err_text"></span>
                    </div>
                 
                    <div class="col-sm-12">
                        <label><span class="color-red"></span></label>
                        <button type="submit" name="submit1" class="btn btn-primary btn-block" style="margin-top:2px;background-color:blue;">Submit</button>
                        <span class="text-danger" id="err_name"></span>
                    </div>

                </div>
                <hr>
                <br />
            </form>
</div>

<?php 
if(isset($_POST['submit1']))
{
$doctor_name=$_POST['doctor_name1'];
$education=$_POST['education1'];
$experience=$_POST['experience1'];
$mobile=$_POST['mobile1'];
$email=$_POST['email1'];
$password=$_POST['password1'];
$address=$_POST['address1'];
$description=$_POST['description1'];  
  $sql15="update doctors set doctor_name='$doctor_name', education='$education', experience='$experience', mobile='$mobile', email='$email', password='$password',address='$address',description='$description'";
   if(mysqli_query($con,$sql15))
   {
     echo "<script>alert('Doctor Updated Succesfull'); window.location.replace('managedoctor.php');</script>";
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
