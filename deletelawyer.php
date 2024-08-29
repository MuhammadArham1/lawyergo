
<?php
include('db.php');

include('db.php');

$id = $_GET['lawyerid'];



	$query = "DELETE FROM lawyer_tb WHERE id = '$id'";	
	$run = mysqli_query($con,$query);
	
	if($run)
	{
		header("location: admin.php");
		
	}
	else
	{
		echo "Error!!";
	}


?>
