<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?= htmlspecialchars($name, ENT_QUOTES) ?></h1> // Referncing of variables in php
    <h1>{{$name}}</h1> // Referncing of variable in Laravel
  </body>
</html>
