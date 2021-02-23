<?php
include_once("connection.php");
$name=$_GET["name"];
$studentid=$_GET["studentid"];
$mobile=$_GET["mobile"];
$email=$_GET["email"];
$gender=$_GET["gender"];
$department=$_GET["department"];
$course=$_GET["course"];
// $pic=$_FILES["pic"]["name"];
// $tmpName=$_FILES["pic"]["tmp_Name"];
// move_uploaded_file($tmpName,"upload/".$pic);
$skills=$_GET["skills"];
$hobbies=$_GET["hobbies"];
print_r($_GET);
$query="INSERT INTO registration('name','studentid','mobile','email','gender','department','course','pic','skills','hobbies') VALUES('$name','$studentid','$mobile','$email','$gender','$department','$course','fgkjldf','$skills','$hobbies')";
print_r($query);
mysqli_query($dbcon,$query);

$msg=mysqli_error($dbcon);

if($msg==""){
  echo "Data Saved";
}
else {
  echo "Please enter correct data";
}

 ?>
