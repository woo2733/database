<?php
	//including the database connection file
	include("dbconfig.php");

	//getting id of the data from url
	$pnum = $_GET['pnum'];

	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM Insurance WHERE pnum='$pnum'");

	//redirecting to the display page (index.php in our case)
	header("Location:Insurance.php");
?>