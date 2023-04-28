
<!DOCTYPE html>
<html>
    <head>
        <title>
            Library Managemenr System
        </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--   <link rel="stylesheet" type="text/css" href="CSS/searchBookStyle.css">-->
    
<style>
   
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
                    <a class="active" href="searchBook.php">Books Search</a>
                    <a id="inActive" href="updateBook.php">Book Update</a>
                    <a id="inActive" href="borrower.php">Issue Book</a>
					<a id="inActive" href="bookSubmission.php">Book Submission</a>
					<a id="inActive" href="bookList.php">Book List</a>
					<a id="inActive" href="studRecord.php">Student Record</a>
                    <a href="Logout.php" id = "logout">Logout</a>
                  </div>
            <div id = "bottomLayout">
                <br><center><h2 id = "formHeading"></h2></center>
                <form action="searchBook.php" id = "searchForm" method = "POST">
                    <table id = "formLayout" cellspacing="10">
                        <tr id = "rowLayout"><td id="rowHeading"> Book Id:</td><td><input type="text" name="bookId" id = "input"></td></tr>
                    </table>
                    <br><center><input type="submit" name="search" value="Search"></center><br>
                  </form>
</div>

				  <footer class="page-footer font-small unique-color-light" style="padding-left: 0px;background-color: #500f07; color:#000">
  <p class= "text-center  p-3" style="background:#440e08; padding: 20px 0;">© 2022 BNBWU. All rights reserved></p>

</footer>


			 <?php
               /*     if(isset($_POST['search'])){
					$bookId = filter_input(INPUT_POST, 'bookNo');
					//session_start();
					//$username = $_SESSION['username'];
					if(!empty($username)){
						if($_SERVER["REQUEST_METHOD"] == "POST"){
							if(!empty($bookId)){
								$host = "localhost";
								$dbusername = "root";
								$dbpassword = "";
								$dbname = "lms";
								$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
								if(mysqli_connect_error())
								{
									die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
								}
								else
								{	
									$result = mysqli_query($conn,"SELECT * FROM addbook WHERE bookNo = '$bookId'");
									echo "<table border='1'>
										<tr>
										<th>Book Id</th>
										<th>Title</th>
										<th>Author Name</th>
										<th>Cost</th>
										<th>Quantity</th>
										</tr>";
									while($row = mysqli_fetch_array($result))
									{
										echo "<tr>";
										echo "<td>" . $row['bookId'] . "</td>";
										echo "<td>" . $row['title'] . "</td>";
										echo "<td>" . $row['authorName'] . "</td>";
										echo "<td>" . $row['cost'] . "</td>";
										echo "<td>" . $row['quantity'] . "</td>";
										echo "</tr>";
									}
									echo "</table><br><br>";
								}
							}
							else{
								echo "Enter bookId";
							}
						}
					}
					else{
						session_destroy();
						$_SESSION = array();
						header("location: main.php");
					}	
                }*/
				?> 
            </div>
        </center>    
    </body>
</html>