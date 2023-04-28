<?php
include 'connect.php';
//session_start();
if(isset($_POST['update'])){
    if(!empty($title)){
        $sql = "SELECT * FROM addbook WHERE tittle = $title";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $bookNo=$_row['bookNo'];
        $title=$_row['tittle'];
        $authorName=$_row['authorName'];
        $department=$_row['department'];
        $cost=$_row['book_edition'];
        $quantity=$_row['quantity'];}

$bookNo = filter_input(INPUT_POST, 'bookNo');
$title = filter_input(INPUT_POST, 'tittle');
$authorName = filter_input(INPUT_POST, 'authorName');
$department = filter_input(INPUT_POST, 'department');
$cost = filter_input(INPUT_POST, 'book_edition');
$quantity = filter_input(INPUT_POST, 'quantity');
//$title = $_SESSION['tittle'];
//$username = $_SESSION['username'];
     //if(!empty($username)){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($title)){
            if(mysqli_connect_error())
            {
                die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
            }
            else
            {	
                $sql = "UPDATE addbook SET bookNo = '$bookNo', tittle = '$title', authorName = '$authorName', department = '$department', book_edition = $cost, quantity = $quantity WHERE tittle = '$title'";
                
                if($conn->query($sql))
                {
                    echo '<script type="text/javascript"> alert("data updated")</script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("data not updated")</script>';
                }	}
                $conn->close();
            }	
        
       // else{
       //     echo "Empty record";
       // }	
    	
    }}

				?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Library Managemenr System
        </title>
       <!-- <link rel="stylesheet" type="text/css" href="CSS/updateResultStyle.css">-->

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
                    <a id="inActive" href="searchBook.php">Books Search</a>
                    <a class="active" href="updateBook.php">Book Update</a>
                    <a id="inActive" href="borrower.php">Issue Book</a>
					<a id="inActive" href="bookSubmission.php">Book Submission</a>
					<a id="inActive" href="bookList.php">Book List</a>
					<a id="inActive" href="studRecord.php">Student Record</a>
                    <a href="Logout.php" id = "logout">Logout</a>
                  </div>
            <div id = "bottomLayout">
                <br><center><h2 id = "formHeading">Update Book</h2></center>
                <?php
                if(!empty($username)){
    $title = $_SESSION['tittle'];
    echo "<h3>"."book name : ".$title."</h3>";
}	
							?>
			
				<form action="updateBookResult.php" method = "POST">



                    <table id = "formLayout" cellspacing="10">
                      <!--  <tr id = "rowLayout"><td id="rowHeading"> Book No:</td><td><input type="text" name="bookNo" id = "input" autocomplete="off" ></td></tr>-->
                        <tr id = "rowLayout"><td id="rowHeading"> Book Name:</td><td><input type="text" name="tittle" id = "input" autocomplete="off"></td></tr>
                        <tr id = "rowLayout"><td id="rowHeading"> Author Name:</td><td><input type="text" name="authorName" id = "input" autocomplete="off"></td></tr>
                        <tr id = "rowLayout"><td id="rowHeading"> Department:</td><td><input type="text" name="department" id = "input" autocomplete="off"></td></tr>
                        <tr id = "rowLayout"><td id="rowHeading"> Book Edition:</td><td><input type="text" name="book_edition"  id = "input" autocomplete="off"></td></tr>
                        <tr id = "rowLayout"><td id="rowHeading"> Quantity:</td><td><input type="text" name="quantity" id = "input" autocomplete="off"></td></tr>
                  

                    </table>
                    <br><center><input type="submit"  value="update" name="update" ></center><br>
                 </form>
			
                <br>
                  
                </div>
			<footer class="page-footer font-small unique-color-light" style="padding-left: 0px;background-color: #500f07; color:#000">
  <p class= "text-center  p-3" style="background:#440e08; padding: 20px 0;">© 2022 BNBWU. All rights reserved></p>>

</footer>
        </center>    
    </body>

</html>