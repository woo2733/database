<?php
	//including the database connection file
	include("dbconfig.php");

	//getting id of the data from url
	$rnum = $_GET['rnum'];

	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM Reservations WHERE rnum='$rnum'");

	//redirecting to the display page (index.php in our case)
	header("Location:Reservations.php");
?>