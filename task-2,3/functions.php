<?php
include_once "connection.php";
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

function getStudent($studentid)
{
  global $dbcon;
  $query = "select *  from registration where studentid = '$studentid'";
  $response = mysqli_query($dbcon,$query);
  $error = mysqli_error($dbcon);
  if($error){
    die($error);
  } else {
    return mysqli_fetch_assoc($response);
  }
}

//doDelete();
 ?>
