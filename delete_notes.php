			
<?php
					
		
		$conn = mysqli_connect("localhost","root","","notes");
		if(mysqli_connect_errno($conn))
		{
			echo "<script>alert('Database Connection Failed.');</script>";
		}
				
		
			$id=$_GET['id'];
			
        $table="note";
		$sql1 = "DELETE FROM $table WHERE ID=$id";
				
		if(mysqli_query($conn,$sql1))
		{ 
		echo "Deleted Successfully";
             header("Location: ListView.php");
		}
		else
		{
			echo "Error while Deleting notes.";
			echo "<a href='ListView.php'>Go Back</a>";
		}
		
?>
				
				
				
				
		
	