<?php 
  
  include('connect.php');


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>LMS</title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color:rgba(210, 237, 34, 0.512);">
<div style="background-color:rgba(160, 22, 12, 0.945); position:absolute; left:0px; top:0px; height:100%; width: 10%;">
</div>
<div style="background-color:rgba(160, 22, 12, 0.945); position:absolute; right:0px; top:0px; height:100%; width: 10%;">
</div>
<header>
</header>

<center>

<div class="content" style="margin-top:10%;">
    <div class="row">

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
    <h3>Recover your password</h3>

      <div class="form-group">

          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email"  class="form-control" id="input1" placeholder="your email" />
          </div>
      </div>

      <input type="submit" class="btn col-md-2 col-md-offset-10" value="Go" name="reset" style="color:rgba(210, 237, 34, 0.945); background:rgba(121, 17, 17, 0.945);"/>
    </form>
    <div style="margin-right:30%; margin-top:5%;"><a href="lms.php" style="color:rgba(121, 17, 17, 0.945);"><strong>Login Here</strong></a></div>
      <br>

      <?php

          if(isset($_POST['reset'])){

          $test = $_POST['email'];
          $row = 0;
          $query=("select password from signin where email = '$test'");
          $query = mysqli_query($conn,$query);
         
          $row = mysqli_num_rows($query);

          if($row == 0){
?>
      <div  class="content"><p>email is not associated with any account. Contact LMS</p></div>

<?php
          }

          else{

            $query=("select password from signin where email = '$test'");
            $query = mysqli_query($conn,$query);
            
            $i =0;
            while($dat = mysqli_fetch_array($query)){
                $i++;
?>
  <strong>
  <p style="text-align: center; margin-top:5%;">Hi there!<br>u requested for the password recovery. You may <a href="lms.php">Login here</a> and enter this key as your password to login. Recovery key: <mark><?php echo $dat['password']; ?></mark></p></strong>
<?php
      }
          }
  }


       ?>

  </div>

</div>

</center>

</body>
</html>
