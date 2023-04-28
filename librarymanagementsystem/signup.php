
<?php

include('connect.php');

  try{
    
      if(isset($_POST['signup'])){

        if(empty($_POST['uname'])){
           throw new Exception("Username cann't be empty.");
        }
        if(empty($_POST['email'])){
          throw new Exception("email cann't be empty.");
       }

        if(empty($_POST['password'])){
           throw new Exception("Password cann't be empty.");
        }
        
        if(empty($_POST['cpassword'])){
           throw new Exception("confirm password cann't be empty.");
        }
        if(empty($_POST['institute'])){
           throw new Exception("institute cann't be empty.");
        }
        
          $query=("insert into signin values('$_POST[uname]','$_POST[email]','$_POST[password]','$_POST[cpassword]','$_POST[institute]')");

          $result = mysqli_query($conn,$query);
        
        $success_msg="Signup Successfully!";

  
  }
}
  catch(Exception $e){
    $error_msg =$e->getMessage();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>lms</title>
<meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="main.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" >
   

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style=" background: #acb6185e;  ">
<div style="background-color:rgba(160, 22, 12, 0.945); position:absolute; left:0px; top:0px; height:100%; width: 10%;">
</div>
<div style="background-color:rgba(160, 22, 12, 0.945); position:absolute; right:0px; top:0px; height:100%; width: 10%;">
</div>
<header>
<div class="banner py-3"> 
<div class="text-center" style="color:rgb(97, 5, 5);">
 <h5 class="text-center"><b>Date</b> : <?php echo date("d-F-20y")?></h5></div></div>
</header>

<center style="position: relative; top: 100px;">
<h1>Signup</h1>

<div class="content container">
  <div class="row">
    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>
    <form method="post" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative;">
      <div class="form-group">
          <label for="uname" class="col-sm-3 control-label"><b>Username</b></label>
          <div class="col-sm-7">
      <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
      </div></div>

      <div class="form-group">
        
            <label for="psw" class="col-sm-3 control-label"><b>Email</b></label>
            <div class="col-sm-7">
      <input type="email"  class="form-control" placeholder="Enter Email" name="email" required>
          </div>
      </div>


      <div class="form-group">
       
            <label for="psw" class="col-sm-3 control-label"><b>Password</b></label>
            <div class="col-sm-7">
      <input type="password"  class="form-control" placeholder="Enter Password" name="password" required>
          </div>
      </div>

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">ConfirmPassword</label>
          <div class="col-sm-7">
            <input type="password" name="password"  class="form-control" id="input1" placeholder="ConfirmPassword" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Confirm Password:</b></label>
            <div class="col-sm-7">
      <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required>
          </div>
</div>

      <div class="form-group">
          <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


            <label for="psw" class="col-sm-3 control-label"><b>Institute:</b></label>
            <div class="col-sm-7">
      <input type="password" class="form-control" placeholder="Enter Institute Name" name="institute" required>
        
          </div>
      </div>
     
      <input type="submit"  class="btn btn-danger col-md-2 col-md-offset-8" value="Signup" name="signup"/>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </form>
  </div>
    <br>
    <h5><p><strong>If Already have an account? <a href="lms.php">Login</a> here.</strong></p></h5>

</div>

</center>

</body>
</html>