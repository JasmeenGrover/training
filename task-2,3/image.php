<?php

include_once("connection.php");


  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("registration");
  $sql = "SELECT pic FROM registration WHERE studentid=$studentid";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['pic'];


echo 'PHP version: ' . phpversion();
?>
