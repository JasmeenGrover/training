<?php
$dbcon=mysqli_connect("localhost","root","","templates");
$msg=mysqli_connect_error();
if($msg=="")
{
  echo "Connected";
}
else {
  echo $msg;
}
 ?>
