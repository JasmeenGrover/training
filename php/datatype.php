<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $x=10; //Integer Datatype
    echo $x;
    var_dump($x); //returns datatype and value
     ?>
     <?php
     $y=10.10; // Float Datatype
     echo $y;
     var_dump($y);
      ?>
      <?php
      $z=true;//Boolean Datatype it can be true or false
      var_dump($z);
       ?>
       <?php
       $cars = array("Bmw","RollsRoyce","Mercedes");
       var_dump($cars);
        ?>
        <?php
        class Books
        {
          public $author;
          public $title;
        public function __construct($title,$author)
          {
            // code...
            $this->author=$author;
            $this->title=$title;
          }
          public function message()
          {
            // code...
            return "Novel " . $this->title . " is written by " .$this->author;
          }
        }

        $novel = new Books("The Merchant of Venice", "Shakespeare");
        echo $novel -> message();
         ?>
  </body>
</html>
