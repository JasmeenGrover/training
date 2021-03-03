<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student registration form</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registration.css">


  </head>
  <body>
    
<div class="title-background shadow">
  <h2>Student Registration Form</h2>
</div>

<div class="container center col-lg-5 mt-5">
  <form class="form-background shadow" action="registration-process.php" method="Post" enctype="multipart/form-data">
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtName">Name</label>
      </div>
      <div class="col-lg-5">
        <input type="text" name="txtName" value="" class="text-field" id="txtName" required>
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtId">Student ID</label>
      </div>
      <div class="col-lg-5">
        <input type="text" id="txtId" name="txtId" value="" class="text-field" disabled>
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtMobile">Mobile</label>
      </div>
      <div class="col-lg-5">
        <input type="text" id="txtMobile" name="txtMobile" value="" class="text-field">
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtEmail">Email</label>
      </div>
      <div class="col-lg-5">
        <input type="text" id="txtEmail" name="txtEmail" value="" class="text-field">
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtGender">Gender</label>
      </div>
      <div class="col-lg-5">
          <input type="radio" id="txtMale" name="txtGender" value="Male" checked> Male <br>
          <input type="radio" id="txtFemale" name="txtGender" value="Female"> Female
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtDepartment">Faculty/Department</label>
      </div>
      <div class="col-lg-5">
        <input type="text" id="txtDepartment" name="txtDepartment" value="" class="text-field">
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtCourse">Select Courses</label>
      </div>
      <div class="col-lg-5">
        <input type="checkbox" id="txtCourse" name="txtCourse[]" value="abcd" checked> abcd <br>
        <input type="checkbox" id="" name="txtCourse[]" value="abcde"> abcd <br>
        <input type="checkbox" id="" name="txtCourse[]" value="abcd"> abcd <br>
        <input type="checkbox" id="" name="txtCourse[]" value="abcd"> abcd <br>
        <input type="checkbox" id="" name="txtCourse[]" value="abcd"> abcd
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtPic">Student Pic</label>
      </div>
      <div class="col-lg-5">
        <input type="file" onchange="showpreview(this);" id="txtPic" name="txtPic" value="">
        <img src="images/logo.jpg" alt="" id="spic" width="100" height="100">
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtTech">Technical Skills</label>
      </div>
      <div class="col-lg-5">
        <select class="text-field" id="txtTech" name="txtTech">
          <option value="">Choose........</option>
          <option value="Full Stack Web Development">Full Stack Web Development</option>
          <option value="Android">Android</option>
          <option value="">Swift(IOS Developer)</option>
          <option>JAVA</option>
          <option>Flutter</option>
          <option>C/C++</option>
          <option>Python</option>
          <option>SAP</option>
          <option>Data Science</option>
          <option>Others.....</option>
        </select>
      </div>
    </div>
    <div class="form-row pt-2">
      <div class="col-lg-5 pl-5">
        <label for="txtHobbies">Hobbies</label>
      </div>
      <div class="col-lg-5">
        <input type="text" id="txtHobbies" name="txtHobbies" value="" class="text-field">
      </div>
    </div>
    <div class="form-row pt-2">
      <!-- <div class="col-lg-10 pl-5 pb-2 pt-5 btn-submit">
        <input type="submit" name="btn" id="btnSubmit" value="Submit" class="btn btn-light btn-outline-dark">
      </div> -->
      <!-- <div class="col-lg-4 btn-submit mt-2">
        <input type="submit" name="btn" id="btnSubmit" value="Submit" class="btn btn-light btn-outline-dark">
      </div> -->
      <div class="col-lg-3 btn-submit mt-2">
        <input type="submit" name="btn" id="btnSubmit" value="Submit" class="btn btn-light btn-outline-dark">
      </div>
      <!-- <div class="col-lg-4 btn-submit mt-2">
        <input type="submit" name="btn" id="btnDelete" value="Delete" class="btn btn-light btn-outline-dark">
      </div> -->
      <div class="col-lg-3 btn-submit mt-2">
       <input type="submit" name="btn" id="btnDelete" value="Delete" class="btn btn-light btn-outline-dark">
     </div>
      <!-- <div class="col-lg-4 btn-submit mt-2">
        <input type="submit" name="btn" value="Update" class="btn btn-light btn-outline-dark">
      </div> -->
      <div class="col-lg-3 btn-submit mt-2">
        <input type="submit" name="btn" value="Update" class="btn btn-light btn-outline-dark">
      </div>
      <div class="col-lg-3 btn-submit mt-2">
        <input type="submit" name="btn" value="Search" class="btn btn-light btn-outline-dark">
      </div>
    </div>
  </form>
</div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript">
    $(document).ready(function(){
      alert();
      $("#btnSubmit").click(function(e){
        e.preventDefault();
        alert("abc");
        var txtName = $("#txtName").val();
        alert(txtName);
        var txtId = $("#txtId").val();
        var txtMobile = $("#txtMobile").val();
        var txtEmail = $("#txtEmail").val();
        var txtMale = $("#txtMale").val();
        var txtFemale = $("#txtFemale").val();
        if($("#txtMale").prop("checked") == true)
        var txtGender = $("#txtMale").val();
        if($("#txtFemale").prop("checked") == true)
        var txtGender = $("#txtFemale").val();
        var txtDepartment = $("#txtDepartment").val();
        var txtCourse = $("#txtCourse").val();
        if(empty($course))
        {
          echo "You didn't get select anything.";
        }
        else {
          $N = count($course);

          echo "selected";
          for ($i=0; $i < $N ; $i++) {
            // code...
            echo ($course[$i] . " ");
          }
        }
        var txtPic = $("#txtPic").val();
        var txtTech = $("#txtTech").val();
        var txtHobbies = $("#txtHobbies").val();
        var url = "registration-process.php?name=" + txtName + "&studentid=" + txtId + "&mobile=" + txtMobile + "&email=" + txtEmail + "&gender="  + txtGender + "&department=" + txtDepartment + "&course=" + txtCourse + "&pic=" + txtPic + "&skills=" + txtTech + "&hobbies=" +txtHobbies;
        alert(url);
        $.get(url, function(response){
          if(response == "Data Saved")
          {
            alert("Jai Mata Di");
          }
          else {
            alert("God Help me");
          }
        });
      });
    });

    function showpreview(file) {

           if (file.files && file.files[0]) {
               var reader = new FileReader();
               reader.onload = function(ev) {
                   $('#spic').attr('src', ev.target.result);
               }
               reader.readAsDataURL(file.files[0]);
           }
       }
    </script> -->

    <script type="text/javascript">
    function showpreview(file) {

           if (file.files && file.files[0]) {
               var reader = new FileReader();
               reader.onload = function(ev) {
                   $('#spic').attr('src', ev.target.result);
               }
               reader.readAsDataURL(file.files[0]);
           }
       }
    </script>

  </body>
</html>
