<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <br>
     <form  name="formlogin" action="log2.php" method="POST" id="login">
              <div class="row">
              <label class="col-md-4" style="text-align:right"> ผู้ใช้งาน </label>
                <div class="col-md-4">
                <input type="Username"  name="user" class="form-control" required placeholder="ผู้ใช้งาน" />
                </div>
                </div>


              <div class="row">
              <br>
              <label class="col-md-4" style="text-align:right"> รหัสผ่าน </label>
                <div class="col-md-4">
                     <input type="Password" name="pass" class="form-control" required placeholder="รหัสผ่าน" />
            </div>
              </div>



              <div class="row">
              <div class="col-md-4"> </div>
              <div class="col-md-4">
              

                </div>
                <div class="col-md-4"> </div>
              &nbsp; &nbsp; &nbsp; <br /> 
              <div class="col-md-12">
              <p align="center">
              
              <a href="index.php" class="btn btn-info btn-sm"> กลับหน้าหลัก </a>
              <button type="submit" class="btn btn-primary btn-sm" id="btn" value="Signin"> เข้าสู่ระบบ </button> 
              </p>
              </div>
              <br>
              
            </form>
      </div>
    </div>
  </div>
      
<!--start footer-->      

<!--end footer-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>