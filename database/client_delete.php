<?php
	//including the database connection file
	include("dbconfig.php");

	//getting id of the data from url
	$cid = $_GET['cid'];

	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM Clients WHERE cid='$cid'");

	//redirecting to the display page (index.php in our case)
	header("Location:Clients.php");
?>