<?php
include_once("connection.php");
echo "<pre>";

print_r($_POST);
exit();
$name=$_POST["name"];
$studentid=$_POST["studentid"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$department=$_POST["department"];
$course=$_POST["course"];
$pic=$_FILES["pic"]["name"];
$tmpName=$_FILES["pic"]["tmp_Name"];
move_uploaded_file($tmpName,"upload/".$pic);
$skills=$_POST["skills"];
$hobbies=$_POST["hobbies"];
// print_r($_GET);
$query="INSERT INTO registration('name','studentid','mobile','email','gender','department','course','pic','skills','hobbies') VALUES('$name','$studentid','$mobile','$email','$gender','$department','$course','$pic','$skills','$hobbies')";
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
