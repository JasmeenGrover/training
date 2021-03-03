<?php
global $dbcon;
$dbcon=mysqli_connect("localhost","root","","templates");
$msg=mysqli_connect_error();
if($msg)
{
  die($msg);
}
