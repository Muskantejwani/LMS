<?php

include('connect.php');  
if(isset($_POST['submit'])){
$uname = $_POST['uname'];  
$password = $_POST['password'];  
  
    $sql = "select * from signin where uname = '$uname' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        header("Location: homepage.php") ;
    }  
    else{  
      //  echo "<h1> Login failed. Invalid username or password.</h1>";  
      echo "<script>alert('Login failed. Invalid username or password.');</script>";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       
    <title>LMS</title>
    <?php
if(isset($error_msg))
{
	echo $error_msg;
}
?>
   <style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    }
    ::-webkit-scrollbar{
        width:10px;
    }
    ::-webkit-scrollbar-track{
        background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb{
        background: rgb(165, 19, 19);
    }
    ::selection{
        background: rgb(167, 53, 8);
    }
    .content{
        max-width: 1250px;
        margin:auto;
        padding:0 30px;     
    }
    .navbar{
        background: rgb(97, 5, 5);
        position: fixed;
        width:100%;
        z-index: 2;
        padding: 45px 0;
        transition: all 0.3 ease;
    }
    footer{
    overflow:hidden;
    }
    .navbar .sticky{
        background: rgb(112, 5, 5);
       padding: 10px 0;
        box-shadow: 0 3px 5px 0 rgb(112, 5, 5);
    }
    .navbar .content{
        display:flex;
        justify-content:space-between;  
    }
    .navbar .logo a{
        width:100px;
        height:100px;
        position:absolute;
        left:100px;
    }
    .navbar .menulist{
       display: inline-flex;
       padding-left: 500px;
    }
    .menulist li{
        list-style: none;
    }
  .menulist li a{
    color:#fff;
    font-size: 25;
    font-weight: 500;
    margin-left: 60px;
    text-decoration: none;
    transition:all 0.3 ease;
  }
  .menulist li a:hover{
    color:rgba(225, 236, 73, 0.534);
  }
  .banner {
   /* background: url(books4.jpg) no-repeat;*/
   background: #acb6185e;
    height:100vh;
    background-size:cover;
    background-position:center;
    background-attachment: fixed;
  }
  .about{
    padding: 30px 0;
  }
  .about .title{
    font-size:38px;
    font-weight:600;
  }
  .about p{
    padding-top: 20px;
    text-align:justify;
  }
  .icon{
    color:#fff;
    font-size:30px;
    cursor: pointer;
    display: none;
  }
  .menulist .cancel-btn{
    position: absolute;
    right:30px;
    top:20px;
  }
.container .first{
  padding-left: 90px;
}
.clr{
  background: #acb6185e;
}
  
 #formLayout{
    margin-top: 60px;
    margin-left: 10px;
 }
 input[type=submit] {
    width: 10em;
    height: 2.5em;
    margin-right: 50px;
    background-color: #c0392b;
    color: #ffffff; 
    border-radius: 10px;
    font-size: 14px;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
}
input[type=submit]:hover{
    background-color: #b61827;
}
#input{
  margin-left: 20px;
    border-color: #c0392b;
    border-radius: 5px;
    padding-bottom: 10px;
    padding-top: 10px;
    width: 250px;
    margin-bottom: 10px;
    height: 30px;
     
}
#rowHeading{
    font-size: 1.2em;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #921d10;
    font-weight: bold;
}
#bottomContentLeft{
    font-size:1.2em;
    color: #962c12;
    font-weight:bold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
span.psw {
  float: right;
  padding-top: 16px;
}
.signup {
  position: relative;
  left:40%;
}

/*signup*/
input[type=text], input[type=password] {
  width: 100%;
  padding: 5px 10px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}



.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #99180f;
}


.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.modal {
  display: none; 
  position: fixed;
  z-index: 3; 
  left: 0;
  top:0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  padding-top: 60px;
  margin-bottom: 100px;
}


.modal-content {
  background-color: #fefefe;
  margin: 0% auto 90% auto;
  border: 1px solid #888;
  width: 80%; 
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: rgb(150, 20, 20);
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
.cen{
  padding-top: 50px;
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.hover-fx img:hover{
width:60px;
box-shadow: 0 5px 10px #310f0f;
background-color:rgba(170, 168, 16, 0.911);
}
@media(max-width:1100px){
    .content{
      padding:0 40px;
    }
}
@media(max-width:968px){


  .container2{
    margin-top: 50px;
  }
  .sidenav{
            height: 100%;
            width: 0;
            position: fixed;
            top:0;
            right:0;
            z-index: 1;
            background-color: rgba(21, 21, 24, 0.904);
            overflow-x: hidden;
            padding-top: 30px;
            transition: all 0.5s;
        }
        .sidenav a{
            text-decoration: none;
            font-size: 20px;
            color: #fff;
            display: block;
            padding: 80px 0 0 10px;
            margin-top:30px;
            margin-right: 30px;
        }
        .closebtn{
            position: relative;
            right:140px;
            font-size: 40px!important;
        }

  .icon{
    display:block;
  }
 
  .navbar  .menulist{
    position: fixed;
    height:100vh;
    width:100%;
    max-width:400px;
    left:-100%;
    top:0;
    display:block;
   padding:40px 0;
   text-align: center;
   background: #222;
   transition: all 0.3 ease;
  }
 
  .navbar .menulist li{
    margin-top: 45px;
  }
  .navbar .menulist li a{
    font-size: 23px;
    margin-left:-100%;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

}

   </style>
  <body>
<nav class="navbar">
    <div class="container-fluid content">
        </div>
    </div>
</nav>

<div class="sidenav" id="mysidenav">
  <ul class="menulist">
    <div class="icon cancel-btn">
     <!--<i><img class="img1" src="close.png"></i>-->
     <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times</a></li>
     </div>
     <li class="nav-item" > 
       <a href="lms.php" style=margin-top:100px;>Home</a>
   </li>
   <li class="nav-item" >
     <a  href="#">About</a>
 </li>
 <li class="nav-item" >
   <a  href="#">Contact</a>
</li>
</ul>
</div>

<div class="banner py-4"> 
<div class="text-center" style="color:rgb(97, 5, 5);">
 <h5 class="text-center"><b>Date</b> : <?php echo date("d-F-20y")?></h5></div>



 <div class="container py-5">
  <div class="row">
    <div class="col-12 col-md-4 py-5">
    <img src="admin.png" class="img-fluid">
    </div>
    <div class="col-12 col-md-8" style="margin-top:20px;">
      <div class="card">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form method="post" action="homepage1.php" id="teacher_login_form">
            <div class="form-group">
              <label>Enter User Name</label>
              <input type="text" name="username" id="teacher_emailid" class="form-control" />
            </div>

            <div class="form-group">
              <label>Enter Password</label>
              <input type="password" name="password" id="teacher_password" class="form-control" />
            
            </div>
            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-danger" value="Login" />
            </div>

            <div class="text-center">
<div class="text-center"><strong >forgot<a href="reset.php" >password</a></strong></div>
<div class="text-center"><strong >Sign<a href="signup.php" >up</a> here</strong></div>
</div></div>

          </form>
        </div>
      </div>
    </div>
  </div>
 










  <footer class="page-footer font-small unique-color-light" style="padding-left: 0px;background-color: #500f07; color:#000">

<div id="opaccredits">
  <div class="opaccredits_en_item">
      <div class="opaccredits_en_body"><div class="container">
<div class="row">
<div class="col-12 col-md-4 mbr-fonts-style display-7 justify-content-center text-center">
<h5 class="pb-3 text-center" style="color: #fff;">Address</h5>
<div class="underline-title-white" style="background-color: #fff; width:50px; height:3px; margin-bottom: 20px; margin-left:43%"></div>
<p class="mbr-text text-center">123 street abc road karachi</p>
</div>
<div class="col-12 col-md-4 mbr-fonts-style display-7 justify-content-center text-center">
<h5 class="pb-3 text-center" style="color: #fff;">Contacts</h5>
<div class="underline-title-white" style="background-color: #fff; width:50px; height:3px; margin-bottom: 20px; margin-left:43%""></div>
<p class="mbr-text">Email: librarian@gmail.com <br>Phone: 12345678910</p>
</div>
<div class="col-12 col-md-4 mbr-fonts-style display-7 justify-content-center text-center">
<h5 class="pb-3 text-center" style="color: #fff;">Follow Us</h5>
<div class="underline-title-white" style="background-color: #fff; width:50px; height:3px; margin-bottom: 20px; margin-left:43%""></div>

<a class="hover-fx" href="#"> <img src="facebook.png" style="padding-right:20px;"> </a> 
<a class="hover-fx" href="#"> <img src="linkedin.png" style="padding-right:20px;"> </a>
<a class="hover-fx" href="#">
<img src="instagram.png" width="24px"> </a>
</div>
</div></div>
  </div></div></div>
  <p class= "text-center  p-3" style="background:#440e08; margin-top:40px;">© 2023 Library. All rights reserved></p>

</footer>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script>
 

  const openNav =() => {
               document.getElementById('mysidenav').style.width="250px";
            }
            const closeNav =() => {
               document.getElementById('mysidenav').style.width="0";
            }


            var modal = document.getElementById('id01');
  
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
    </script>
</html>

   