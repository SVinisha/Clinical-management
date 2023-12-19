<?php

  include('db.php');
  $id=$_GET['id'];

$sql101=" delete from doctors where id='$id' ";
$result51=mysqli_query($con,$sql101); 

if($result51)
{
 echo '<script>alert("delete Success");window.location.replace("managedoctor.php")</script>';
}
else
{
 echo 'db issue';   
}



  ?>
