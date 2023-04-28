<?php
include 'connect.php';
//$result = mysqli_query($conn, "select * from addbook");

?>
       

        <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <title>LMS</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .containerlist{
    overflow:hidden;
  }
footer{
  overflow:hidden;
}
.btn1{
  background-color:rgba(111, 112, 25, 0.733);
}
.btn1:hover{
  background-color:rgba(110, 104, 10, 0.911);
  color:rgba(90, 32, 14, 0.911);
}
.btn2{
  background-color:rgba(150, 51, 21, 0.911);
}
.btn2:hover{
  background-color:rgba(90, 32, 14, 0.911);
  color:rgba(209, 197, 20, 0.911);
}
 .searchkey{
margin-left:35%;
margin-bottom:3%;
 }


  .containerlist {
    height: 200px;
    background-color: rgb(190, 201, 34);
  }


  ::-webkit-scrollbar {
    width: 10px;
  }

  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  ::-webkit-scrollbar-thumb {
    background: rgb(165, 19, 19);
  }

  ::selection {
    background: rgb(167, 53, 8);
  }

  .content {
    max-width: 1250px;
    margin: auto;
    padding: 0 30px;
  }

  .navbar {
    background: rgb(97, 5, 5);
    position: absolute;
    color:#fff;
    width: 100%;
    z-index: 2;
    padding: 25px 0;
    transition: all 0.3 ease;
    top:0;
  }

  .navbar li a.active {
    color: rgba(225, 236, 73, 0.534);
   
  }

.btnlogout{
  border-color: rgba(225, 236, 73, 0.534);
}
.btnlogout:hover{
  background-color: rgba(225, 236, 73, 0.534);
   color: black;
}
/*.navbar .hov3{
  color: rgba(225, 236, 73, 0.534);
}*/
.hov3:hover{
color:#fff;
}

  .navbar .logo a {
    width: 100px;
    height: 100px;
    position: absolute;
    left: 100px;
  }


  .navbar li {
    list-style: none;
  }
  

  .navbar li a {
    color: #fff;
   /* font-size: 25;*/
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3 ease;
  }

  .navbar li a:hover {
    color: rgba(225, 236, 73, 0.534);
  }
body{
  
  background: url(books4.jpg) no-repeat;
  background-size: 100% 100%;
}
 
 .topImage{
    height: 50vh;
    width: 95vw;
    margin-top: 30px;
    border-radius: 20px;
    opacity: 0.9;
	box-shadow: 0px 0px 0px 0px #3e2723;
	-webkit-transition: all 0.4s ease-out;
    -moz-transition: all 0.4s ease-out;
    -o-transition: all 0.4s ease-out;
    -ms-transition: all 0.4s ease-out;
    transition: all 0.4s ease-out;
    transform: rotate(180deg);
}
.topImage:hover{
	height: 325px;
    width: 1305px;
	box-shadow: 0px 10px 5px 5px #5d4037;
	-webkit-transition: all 0.4s ease-in;
    -moz-transition: all 0.4s ease-in;
    -o-transition: all 0.4s ease-in;
    -ms-transition: all 0.4s ease-in;
    transition: all 0.4s ease-in;
}	
  
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover {
    border-radius:15px;
    background-color: rgba(190, 201, 34, 0.959);
    box-shadow:0 2px 20px 0 rgba(202, 233, 24, 0.986);
    color: black;
   
  }
  
  .topnav a.active {
    background-color: #491009;
    color: white;
    border-radius:15px;
    margin:5px;
    margin-top:4%;
  }
  .topnav a.active:hover{
   
    color: black;
  }
  #inActive{
    border-radius:15px;
    margin:5px;
   
  }
  
  .layer
{
     height: 100%;
     width:95vw;
     border-radius: 10px;
    /* opacity: 0.9;*/
  
     margin-top:3%;
     padding-top:5%;
     background-color: #B3A938;
	 border-style: solid;
     border-radius: 10px;
     border-color: #b61827;
     box-shadow: 5 20px 10px 10 rgba(21, 22, 13, 0.986);
 }


footer{
    displaly:inline;
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

</style>


<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link hov3" aria-current="page" href="lms.php" style="color:rgb(225, 236, 73, 0.534); font-size:20px;">Home</a>
        </li>
      </ul>
      <form class="d-flex">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="homepage1.php">Homepage</a>
        </li>
      <li class="nav-item">
          <a class="nav-link " aria-current="page" href="addbook.php">Add book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="borrower.php">issue book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bookSubmission.php">return book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bookList.php">book list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studRecord.php">Student record</a>
        </li>
        <button class="btn btnlogout" type="submit" >
          <a id="inActive" href="Logout.php" id="logout"  style=" text-decoration:none; color:rgb(225, 236, 73, 0.534);">Logout</a></button>
      </form>
    </div>
  </div>
</nav>

<body>



  <div class="layer" style="width:100%; padding-left:3%; padding-right:2%;">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center"><search></h1>
                <br>
                <input type="text" name="search" id="search"  onkeyup="search_table();  " placeholder="search by book Name" class="pr-5 pl-5 pt-3 pb-3 searchkey">
                            
                 <table class="table" id="myTable"> 
								<thead>
								<th>BookNo</th>
								<th>Book Name</th>
								<th>Author Name</th>
								<th>department</th>
								<th>Book Edition</th>
								<th>Quantity</th>
                <th>Actions</th>
</thead>
<tbody>
<?php

$conn = new mysqli("localhost", "root", "", 'lms');
$i =1;

 if(mysqli_connect_error())
 {
   die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
 }
 
 else
 {	
if(isset($_GET['del']))
{
mysqli_query($conn,"delete from addbook where bookNo = '".$_GET['bookNo']."'");
echo '<script>alert("Deleted")</script>';
echo '<script>window.location.href=bookList.php</script>'; 
      }
      $result = mysqli_query($conn, "select * from addbook");
foreach($result as $row){
    ?>
                               <tr>
                               <td><?php echo $row['bookNo'];?> </td>
                               <td><?php echo  $row['tittle']?> </td>
								<td><?php echo $row['authorName'] ?></td>
								<td><?php echo  $row['department']?> </td>
								<td><?php echo  $row['book_edition']?> </td>
								<td><?php echo  $row['quantity']?> </td>
               <td> <a href="edit-course.php?bookNo=<?php echo $row['bookNo']?>">
                <button class="btn  btn1">Edit</button> </a>  
                <a href="bookList.php?bookNo=<?php echo $row['bookNo']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                                        <button class="btn  btn2">Delete</button>
            </a>
              </td>
</tr>
<?php
}}
?>
</tbody>
</table>
</div>
</div></div>
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
        </center>   

    </body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">

function search_table() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


</script>



	
</html>