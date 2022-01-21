<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Notes_Script.js" defer></script>
    <title>View Note</title>
    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url('view_image.jpg');
  background-repeat: no-repeat;
  
  background-size: 100% 700px;
    opacity: 0.7;
}

*{
  margin:0;
  padding:0;
  font-family:verdana;
}
#abc{
  width:100%;
  height:80vh;
  #background-image: url(view_image.jpg);
  background-size: cover;
    opacity: 0.7;
}
nav{
  width: 100%;
  height: 50px;
  background-color: transparent;
  line-height: 50px;
}

nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.7s all;
margin-top: 20px;
}
nav ul li:hover{
  background-color:#088;

}
nav ul li a{
  text-decoration: none;
  color:black;
  
  padding: 30px;
    opacity: 1;
}
    
    .log-out
    {
    background-color:crimson; 
  border: none;
  color: white;
  padding: 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;

  font-size: 16px;
  margin: 0px 2px;
margin-top: 20px;
  cursor: pointer;
        border-radius: 20px;
        
    }
/* Right-aligned section inside the top navigation */
.topnav-right{
  float: right;
}
    
.noHover{
    pointer-events: none;
    text-decoration:none;
    
}
 
.row {
    margin-top: 20px;
    margin-left: 10%;
    
  float: left;
  width: 80%;
  padding-left: 5%;
  padding-bottom: 1%;
}
   
.de
{
    
    position: relative;
    margin-left: 90%;
    width:45px;
    height:45px;
    border-radius: 50px;
    border: 1px solid whitesmoke;
    background-color:antiquewhite;
}

.row_link
{
    text-decoration: none;
    color:darkslategrey;
}
</style>
</head>
<body>
    
<div id="abc" >
    <nav>      
        <ul>
            <li class="noHover"><a href="#" style="font-size: 2em">A Notes Application! </a></li>
            <li class="topnav-right log-out" ><a href="Sign_Up.php">Log Out</a></li>
            <li class="topnav-right"><a href="Contact_Us.php">Contact Us</a></li>
            <li class="topnav-right"><a href="#">View Notes</a></li>
            <li class="topnav-right"><a href="Add_Notes.php">Add Notes</a></li>
            <li class="topnav-right"><a href="Sign_Up.php">Home</a></li>
        </ul>
    </nav>
</div>
    
    <br><br> <br><br>    
    
    
  <?php

$conn = new mysqli("localhost", "root", "", "notes");
// Check connection
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $table = "note";
  $sql = "SELECT ID, Title, Description, Theme FROM $table"; 
  $result = $conn->query($sql);
    
 
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            
            $id=$row["ID"];
            
            echo "<a class='row_link' href=View_Notes.php?id=".$id.">";
            echo "<div id='row' class='row' style='background-color:rgba(255, 99, 71, 0.5);'>";
            echo "<br><h2>";
            echo $row["Title"];
            echo "</h2>";
			
			
		
			echo "<a class='de fa fa-trash-o' value='Delete' style='text-decoration:none;color:black;font-size:40px;padding-left:10px;' href=delete_notes.php?id=".$id."></a>";
			echo "</a>";
            echo "</div>";
			
		}
		
}
else
{
	echo "<br>";
	echo "<h1 style='color:cyan'><center>You have no added notes yet.</center></h1>";
}


?>
  
  
  
    
    
 


</body>
</html>
