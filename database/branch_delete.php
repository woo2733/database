<?php
	//including the database connection file
	include("dbconfig.php");

	//getting id of the data from url
	$loc = $_GET['loc'];

	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM Branch WHERE loc='$loc'");

	//redirecting to the display page (index.php in our case)
	header("Location:Branch.php");
?>