<?php
					
		if(isset($_POST['insert']))
		{
		$conn = mysqli_connect("localhost","root","","notes");
		if(mysqli_connect_errno($conn))
		{
			echo "<script>alert('Database Connection Failed.');</script>";
		}

        $table = "note";    
            
		$title = $_POST['title'];			
		$desc = $_POST['description'];
		$theme =$_POST['theme'];
						
            
		$sql1 = "INSERT INTO note (Title,Description,Theme) VALUES ('$title', '$desc','$theme')";
				
		if(mysqli_query($conn,$sql1))
		{ 
		echo "<script>alert('Note Added Successfully');</script>";
             header("Location: Add_Notes.php");
		}
		else
		{
			echo "Error while inserting note..";
			echo "<a href='Add_NOtes.php'>Go Back</a>";
		}
		}
?>