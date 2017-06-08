<?php
	//including the database connection file
	include("dbconfig.php");

	//getting id of the data from url
	$mnum = $_GET['mnum'];

	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM Mileage WHERE mnum='$mnum'");

	//redirecting to the display page (index.php in our case)
	header("Location:Mileage.php");
?>