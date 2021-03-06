<?php
session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     print_r($_SESSION);
      ?>

      <?php
      $_SESSION["color"] = "blue"; // To change value of session overrude the value of session
       ?>


   </body>
 </html>
