<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $a=10;
    var_dump(is_int($a));//checks type of variable is integer
     ?>
     <?php
     $b=10.5;
     var_dump(is_float($b));// check type of variable is float
      ?>
      <?php
      $c=acos(1/2);
      var_dump($c);
       ?>
       <?php
       $x=10.5;
       $int_cast = (int)$x;//float converted to int
       echo $int_cast;
        ?>
        <?php
        $y="12345.0";
        $int_cast = (int)$y;
        echo $int_cast;
         ?>
  </body>
</html>
