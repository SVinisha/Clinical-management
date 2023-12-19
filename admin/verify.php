
<?php

       if(isset($_POST["login"]))
       {
              $email=$_POST["email"];
              $password=$_POST["password"];

              if($email=="admin@gmail.com" && $password=="admin")
              {  
                  setcookie("email", $email, time() + (86400 * 30), "/");
                  echo "<script>alert('Visiting as a admin');window.location.replace('main.php');</script>";
              } 
              else
              {   
              echo "<script>alert('Invalid Credentials');window.location.replace('index.php');</script>";   
              } 
       }

      
?>


