<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Referncing of variables in php -->
    <h1><?= htmlspecialchars($name, ENT_QUOTES) ?></h1>
    <!-- Referncing of variable in Laravel -->
    <h1>{{$name}}</h1>
  </body>
</html>
