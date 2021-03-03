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
          <td class="text-center"><a class='btn btn-info btn-xs' href="registration.php"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="list-process.php" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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
</html>
