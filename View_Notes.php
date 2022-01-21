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
}

*{
  margin:0;
  padding:0;
  font-family:verdana;
}
#abc{
  width:100%;
  height:80vh;
  background-image: url(view_image.jpg);
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
    background-color:crimson; \
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
    
.container-red {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
            margin: 15vh auto;
            padding: 5%;
            border-radius: 15px;
            border: none;
            box-shadow: 0 0 15px rgb(255, 140, 176);
            background-color:darksalmon;
        }
.container-green {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
            margin: 15vh auto;
            padding: 5%;
            border-radius: 15px;
            border: none;
            box-shadow: 0 0 15px rgb(80,255,86);
            background-color:palegreen;
        }
.container-blue {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
            margin: 15vh auto;
            padding: 5%;
            border-radius: 15px;
            border: none;
            box-shadow: 0 0 15px rgb(150, 150, 255);
            background-color:lightskyblue;
        }        
#wrapper {
  width: 50%;
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
}





i:before {
  font-size: 18px;
}

.note-title {
  font-size: 1.5em;
  font-weight: bold;
  display: block;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 90%;
}

.note-message {
  display: block;
  width: 100%;
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
            <li class="topnav-right"><a href="ListView.php">View Notes</a></li>
            <li class="topnav-right"><a href="Add_Notes.php">Add Notes</a></li>
            <li class="topnav-right"><a href="Sign_Up.php">Home</a></li>
        </ul>
    </nav>
</div>
    
    
<?php
	
		$conn = mysqli_connect("localhost","root","","notes");
		if(mysqli_connect_errno($conn))
		{
			echo "<script>alert('Database Connection Failed.');</script>";
		}
            $id=$_GET['id'];
			
         $table="note";
		 $sql = "SELECT Title,Description,Theme FROM $table WHERE ID =$id"; 
		
    
         $result = $conn->query($sql);
    
 
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        
            $theme = $row['Theme'];
        
            if($theme == "Red")
            {
            echo "<div class='container-red'>";
            echo "<h2 class='note-title'><center>";
            echo $row["Title"];
            echo "</center></h2>";
            echo "<br><br>";
        
            echo "<p class='note-message'>";
            echo $row["Description"];
            echo "</p>";
            echo "</div>";
            }
            else if($theme == "Blue")
            {
            echo "<div class='container-blue'>";
            echo "<h2 class='note-title'><center>";
            echo $row["Title"];
            echo "</center></h2>";
             echo "<br><br>";
        
        
            echo "<p class='note-message'>";
            echo $row["Description"];
            echo "</p>";
            echo "</div>";
            }
            else
            {
            echo "<div class='container-green'>";
            echo "<h2 class='note-title'><center>";
            echo $row["Title"];
            echo "</center></h2>";
             echo "<br><br>";
        
        
            echo "<p class='note-message'>";
            echo $row["Description"];
            echo "</p>";
            echo "</div>";
            }
             
		}
		else
		{
			header("Location: ToDo_List.php");
		}
		
    
    
    


?>
</body>
</html>
