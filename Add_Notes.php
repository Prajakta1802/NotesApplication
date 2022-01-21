<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <title>Add Notes</title>
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
    margin-top: 0;
  width:100%;
  height:80vh;
  background-image: url(add_image.jpg);
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
    
#wrapper {
  width: 50%;
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
}

#note-editor {
    width: 90%;
  max-width: 1140px;    
  padding-bottom: 12px;
  margin-bottom: 48px;
  border-bottom: 1px solid rgba(0,0,0,0.2);
  opacity: 1;
  transition: all 0.25s ease-out;
}

#note-editor.hide {
  opacity: 0;
}

label {
  display: block;
  width: 100%;
  margin-bottom: 15px;
}

input {
  font-size: 16px;
  display: block;
  width: 300px;  
  margin-bottom: 15px;
  padding: 8px 6px;
}

input.is-empty {
  border: 2px solid tomato;
}

textarea {
  font-size: 16px;
  display: block;
  margin-bottom: 15px;
  padding: 8px 6px;
}

textarea.is-empty {
  border: 1px solid tomato;
}

#button {
  position: relative;
}

#error {
  color: tomato;
  position: absolute;
  top: 12px;
  left: 150px;
  line-height: 16px;
}

select {
  display: block;
  margin-bottom: 15px;
  width: 175px;
  padding: 0;
  height: 24px;
}

.button-css {
  position: relative;
  display: block;
  width: 120px;
  margin-top: 40px;
  padding: 12px 8px;
  border-radius: 5px;
  margin-bottom: 15px;
  outline: none;
  border:0;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  background: dodgerblue;
  color: white;
  font-size: 14px;
}

button:active {
  box-shadow: 0px 0px 1px rgba(0,0,0,0.1);
  top: 1px;
  left: 1px;
}

ul {
  padding-left: 0;
}

#notes-section {
  opacity: 1;
  visibility: visible;
  transition: all 0.25s ease-out;
}

#notes-section.hide {
  opacity: 0;
  visibility: hidden;
}

#notes li {
  position: relative;
  list-style-type: none;
  display: block;
  float: left;
  width: 340px;
  height: 250px;
  padding: 8px 12px;
  border-radius: 5px;
  margin: 0 5px 12px;
}

#notes li.red {
  background: pink;
}

#notes li.green {
  background: palegreen;
}

#notes li.blue {
  background: lightskyblue;
}

footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 24px;
  left: 0;
  background: rgba(255,255, 255, 0.4);
  padding: 5px 0;
}

.edit {
  position: absolute;
  height: 24px;
  left: 12px;
  line-height: 24px;
  cursor: pointer;
}

.delete {
  float: right;
  position: absolute;
  top: 5px;
  right: 5px;
  cursor: pointer;
}

i:before {
  font-size: 18px;
}

.note-title {
  font-size: 1.5em;
  font-weight: bold;
  display: block;
  width: 50%;
    margin: 0 auto;
  padding: 0 20px;

}
    
.note-message {
  display: block;
  width: 100%;
}   
    
input[type="text"],
textarea,
select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
    textarea{
        height: 60px;
	resize:none;
	overflow: hidden;
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
            <li class="topnav-right"><a href="#">Add Notes</a></li>
            <li class="topnav-right"><a href="Sign_Up.php">Home</a></li>
        </ul>
    </nav>
</div>

<br><br><br><br><br><br><br>
    

<div id="wrapper">
    <div id="note-editor">
      <h2 id="note-editor-title">Add Your Notes Here..!</h2>
        <br>
        
        <form id="frm" name="frm" method="POST" action="insert_data.php">
      <input type="text" id="title" name="title" placeholder="Title"/>
      <textarea rows="20" cols="33" id="description" name="description" placeholder="Description"></textarea>
     
      <select id="theme" name="theme">
        <option value="Red" selected>Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
      </select>
      
             <input type = "submit" class="button-css"  name="insert" value="Create Note">
       
            
    </form>
    </div>

    </div>  
    <br><br><br><br><br><br><br>
    
    



</body>
</html>
