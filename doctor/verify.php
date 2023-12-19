
<?php
                       
       include('db.php');

       if(isset($_POST["login"]))
       {

              $email=$_POST["remail"];
              $password=$_POST["rpass"];
echo $email;
              $sql2="select email,password from doctors where email='$email' && password='$password'";
              $result=mysqli_query($con,$sql2);
              if(mysqli_num_rows($result)>0)
              {
                     setcookie("email", $email, time() + (86400 * 30), "/");
                     echo "<script>window.location.replace('main.php');</script>";
              }
              else
              {
                      echo "<script>alert('Email or password incorrect...');window.location.replace('index.php');</script>"; 
              }
       }

      
?>


