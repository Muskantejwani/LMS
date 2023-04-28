<?php

include('connect.php');
    
      if(isset($_POST['search'])){
        if(empty($_POST['tittle'])){
           //throw new Exception("book name is empty");
           echo " ";
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(!empty($title)){
                $conn = new mysqli("localhost", "root", "", 'lms');
				if(mysqli_connect_error())
				{
					die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
				}
				else{
                    $sql = "SELECT * FROM addbook WHERE tittle = '$title'";
					if($conn->query($sql))
					{
						$_SESSION['tittle'] = $title;
						header('Location: updateBookResult.php');
					}
					else
					{
						echo "Error: ". $sql ."<br>". $conn->error;
					}	
					$conn->close();
				}
                }
  }
}

	
	
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>
            Library Managemenr System
        </title>
    <!-- <link rel="stylesheet" type="text/css" href="searchBookStyle.css">-->
<style>
	body{
    height: 100%;
    width: 100%;
 }
  .topnav{
    width: 95vw;
    background: #751a0f;
    overflow: hidden;
    border-radius: 10px;
    margin-top:5px;
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
  }
  .topnav a.active:hover{
    /*background-color: #ddd;*/
    color: black;
  }
  #inActive{
    border-radius:15px;
    margin:5px;
   
  }
  
#bottomLayout{
     height: auto;
     width: 95vw;
     border-radius: 10px;
     opacity: 0.9;
     background-color: #B3A938;
     margin-top: 10px;
	 border-style: solid;
     border-radius: 10px;
     border-color: #b61827;
     box-shadow: 5 20px 10px 10 rgba(21, 22, 13, 0.986);
 }
 #logout{
     color: white;
     border-radius:5px;
    margin: 5px;
 }
 #logout:hover{
  background-color: rgba(190, 201, 34, 0.959);
  border-radius:15px;
  box-shadow:0 2px 20px 0 rgba(202, 233, 24, 0.986);
    color: black;
 }
 input[type=submit] {
    width: 10em;
    height: 2.5em;
    background-color: #c0392b;
    color: #ffffff; 
    padding: 5px;
    border-radius: 10px;
}
input[type=submit]:hover{
    background-color: #b61827;
    color: #000;
}
#rowHeading{
    font-size: 1.1em;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #c0392b;
    font-weight: italic;
}
#input{
    border-color: #c0392b;
    border-radius: 5px;
    width: 180px;
    height: 20px;
}
footer{
    displaly:inline;
    }
  
</style>

    </head>
    <body background="books4.jpg">
        <center>
             <div>
                <img src="books2.jpg" class = "topImage">  
            </div>
            <div class="topnav">
                    <a id="inActive" href="addBook.php">Add Books</a>
                    
                    <a class="active" href="updateBook.php">Book Update</a>
                    <a id="inActive" href="borrower.php">Issue Book</a>
					<a id="inActive" href="bookSubmission.php">Book Submission</a>
					<a id="inActive" href="bookList.php">Book List</a>
					<a id="inActive" href="studRecord.php">Student Record</a>
                    <a href="Logout.php" id = "logout">Logout</a>
                  </div>
            <div id = "bottomLayout">
                <br><center><h2 id = "formHeading"></h2></center>
                <form action="updateBookResult.php" id = "searchForm" method = "POST">
                    <table id = "formLayout" cellspacing="10">
                        <tr id = "rowLayout"><td id="rowHeading"> Book Name:</td><td><input type="text" name="tittle" id = "input" required></td></tr>
                    </table>

                    
                   <br><center><input type="submit" value="Search" name="search"></center><br>
                 </form>
                 
                 </div>
			<footer class="page-footer font-small unique-color-light" style="padding-left: 0px;background-color: #500f07; color:#000">
  <p class= "text-center  p-3" style="background:#440e08; padding: 20px 0;">© 2022 BNBWU. All rights reserved></p>

</footer>
        </center>    
    </body>
</html>