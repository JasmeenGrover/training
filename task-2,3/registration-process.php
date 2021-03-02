<?php
include_once("connection.php");

$btn=$_POST["btn"];
if ($btn == "Submit") {
  // code...
  doSubmit($dbcon);
}
else {
  if($btn == "Delete"){
    doDelete($dbcon);
  }
  else {
    if($btn == "Update"){
      doUpdate($dbcon);
    }
  }
}

if ($btn == "Search") {
  doSearch($dbcon);
}

echo "<pre>";

print_r($_POST);
// exit();
function doSubmit($dbcon){
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
// $course = array('course');
$course = implode(",", $course);
echo $course;
$pic=$_FILES["txtPic"]["name"];
$tmpName=$_FILES["txtPic"]["tmp_Name"];
move_uploaded_file($tmpName,"upload/".$pic);
$skills=$_POST["txtTech"];
$hobbies=$_POST["txtHobbies"];
// print_r($_GET);
// $query="INSERT INTO registration ('name','studentid','mobile','email','gender','department','course','pic','skills','hobbies') VALUES ('$name','$studentid','$mobile','$email','$gender','$department','$course','$pic','$skills','$hobbies')";

$query = "insert into registration values ('$name','$studentid','$mobile','$email','$gender','$department','$course','$pic','$skills','$hobbies')";
// echo $query;
print_r($query);

print_r($FILES);

// $query = array('name','studentid','mobile','email','gender','department','course','pic','skills','hobbies');
// $comma_separated = implode(",", $query);

// echo $comma_separated;

mysqli_query($dbcon,$query);

echo $msg=mysqli_error($dbcon);

if($msg==""){
  echo "Data Saved";
}
else {
  echo "Please enter correct data";
}
}

function doDelete($dbcon){
  $name=$_POST["txtName"];
  $studentid=$_POST["txtId"];
  $mobile=$_POST["txtMobile"];
  $email=$_POST["txtEmail"];
  $gender=$_POST["txtGender"];
  $department=$_POST["txtDepartment"];
  $course=$_POST["txtCourse"];
  $course = implode(",", $course);
  echo $course;
  $pic=$_FILES["txtPic"]["name"];
  $tmpName=$_FILES["txtPic"]["tmp_Name"];
  move_uploaded_file($tmpName,"upload/".$pic);
  $skills=$_POST["txtTech"];
  $hobbies=$_POST["txtHobbies"];

  $query = "delete from registration where studentid = '$studentid'";


  mysqli_query($dbcon,$query);
  $count=mysqli_affected_rows($dbcon);
  echo $count."Delete";
}


function doUpdate($dbcon){
  $name=$_POST["txtName"];
  $studentid=$_POST["txtId"];
  $mobile=$_POST["txtMobile"];
  $email=$_POST["txtEmail"];
  $gender=$_POST["txtGender"];
  $department=$_POST["txtDepartment"];
  $course=$_POST["txtCourse"];
  $course = implode(",", $course);
  echo $course;
  $pic=$_FILES["txtPic"]["name"];
  $tmpName=$_FILES["txtPic"]["tmp_Name"];
  move_uploaded_file($tmpName,"upload/".$pic);
  $skills=$_POST["txtTech"];
  $hobbies=$_POST["txtHobbies"];

  $query = "update registration set name='$name',studentid='$studentid',mobile='$mobile',email='$email',gender='$gender',department='$department',course='$course',pic='$pic',skills='$skills',hobbies='$hobbies' where studentid='$studentid'";

  mysqli_query($dbcon,$query);

  $msg=mysqli_error($dbcon);
  if ($msg=="") {
    // code...
    echo "Updated";
  }
  else {
    echo $msg;
  }
}

function doSearch($dbcon){
  
}

 ?>
