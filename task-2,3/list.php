<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/list.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    <?php
    include_once("connection.php");
    $result = mysqli_query($dbcon,"Select * from registration");
     ?>
    <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
      <?php
      if (mysqli_num_rows($result) > 0) {
        // code...
       ?>
    <table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    $i=0;
    while ($row = mysqli_fetch_array($result)) {
      ?>
      <!-- // code... -->
      <tr>
          <td> <?php  echo $row["studentid"]; ?> </td>
          <td><?php echo $row["name"]; ?> </td>
          <td><?php echo $row["mobile"]; ?> </td>
          <td class="text-center">
            <a class='btn btn-info btn-xs' href="registration.php?id=<?php  echo $row["studentid"]; ?>">
              <span class="glyphicon glyphicon-edit"></span> Edit</a>
              <a href="list-process.php" name="btn" class="btn btn-danger btn-xs">
                <span class="glyphicon glyphicon-remove"></span> Del</a>
              </td>
      </tr>
      <?php
      $i++;
    }
    ?>
     <!-- ?> -->

    </table>
    <?php
  }
  else {
    echo "No result found";
  }
     ?>
    </div>
</div>
  </body>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</html>
