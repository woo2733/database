<?php
	//including the database connection file
	include("dbconfig.php");

	//getting id of the data from url
	$id = $_GET['id'];

	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM Branch WHERE id='$id'");

	//redirecting to the display page (index.php in our case)
	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
?>