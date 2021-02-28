<?php
include_once("connection.php");
echo "<pre>";

print_r($_POST);
// exit();
$name=$_POST["txtName"];
$studentid=$_POST["txtId"];
$mobile=$_POST["txtMobile"];
$email=$_POST["txtEmail"];
$gender=$_POST["txtGender"];
// var txtMale = $("#txtMale").val();
// var txtFemale = $("#txtFemale").val();
// if($("#txtMale").prop("checked") == true)
// var txtGender = $("#txtMale").val();
// if($("#txtFemale").prop("checked") == true)
// var txtGender = $("#txtFemale").val();
$department=$_POST["txtDepartment"];
$course=$_POST["txtCourse"];
$pic=$_FILES["txtPic"]["name"];
$tmpName=$_FILES["txtPic"]["tmp_Name"];
move_uploaded_file($tmpName,"upload/".$pic);
$skills=$_POST["txtTech"];
$hobbies=$_POST["txtHobbies"];
// print_r($_GET);
// $query="INSERT INTO registration('name','studentid','mobile','email','gender','department','course','pic','skills','hobbies') VALUES ('$name','$studentid','$mobile','$email','$gender','$department','$course','$pic','$skills','$hobbies')";

print_r($query);

$query = array('name','studentid','mobile','email','gender','department','course','pic','skills','hobbies');
$comma_separated = implode(",", $query);

echo $comma_separated;

mysqli_query($dbcon,$query);

echo $msg=mysqli_error($dbcon);

if($msg==""){
  echo "Data Saved";
}
else {
  echo "Please enter correct data";
}

 ?>
