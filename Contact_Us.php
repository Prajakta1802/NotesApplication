<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
 <style>
body {
  background-image: url('contact_image.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
  opacity: 0.7;
}
</style> 

   <style>
            body {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(41, 39, 39);
        }
        
//start
*{
  margin:0;
  padding:0;
  font-family:verdana;
}
#abc{
    margin:0;
  width:100%;
  height:10vh;
  #background-image: url(contact_image.jpg);
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
    text-decoration: none;
}
nav ul li a{
  text-decoration: none;
  color:black;
  padding: 30px;
    opacity: 1;
}
    
    .log-out
    {
    background-color:Tomato; \
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
  
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-text:left;
            width: 500px;
            margin: 15vh auto;
            padding: 15px;
            border-radius: 15px;
            border: none;
            box-shadow: 0 0 15px rgb(180, 51, 73);
            /* background-color: gray; */
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
        }
        
        input {
            width: 100%;
            margin: 5px 0;
            height: 35px;
            font-size: 17px;
            text-align: left;
            outline: none;
            border-radius: 15px;
            border: none;
            background: rgb(235, 228, 228);
        }
        
        textarea {
            width: 100%;
            margin: 5px 0;
            font-size: 17px;
            text-align: left;
            outline: none;
            border-radius: 15px;
            border: none;
            background: rgb(235, 228, 228);
        }
        input[type=submit]{
            margin: 10px auto;
            width: 120px;
            background: rgb(216, 31, 62);
            color: white;
            cursor: pointer;
        }
        input[type=submit]:hover{
        background: tomato;
        }
        @media screen and (max-width:600px) {
            .container{
                width: 90%;
            }
        }

    </style>
</head>

<body>
    

    <div id="abc" >
    <nav>      
        <ul>
            <li class="noHover"><a href="#" style="font-size: 2em">A Notes Application!</a></li>
            <li class="topnav-right log-out" ><a href="Sign_Up.php">Log Out</a></li>
            <li class="topnav-right"><a href="#">Contact Us</a></li>
            <li class="topnav-right"><a href="ListView.php">View Notes</a></li>
            <li class="topnav-right"><a href="Add_Notes.php">Add Notes</a></li>
            <li class="topnav-right"><a href="Sign_Up.php">Home</a></li>
        </ul>
    </nav>
</div>
    
    <div class="container">
        <h2>We're Ready, Let's Talk!</h2>
        <form action="#">
            <input type="email" name="email" id="email" placeholder=" Enter Your Name">
            <input type="text" name="name" id="name" placeholder=" Enter Email Address">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
            <input type="submit" value="Send Message">
        </form>
    </div>

</body>

</html>