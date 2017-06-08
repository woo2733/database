<h1>New Branch</h1>
<?php

	include_once("dbconfig.php");
	
	if(isset($_POST['Submit'])){
		$loc = mysqli_real_escape_string($mysqli, $_POST['loc']);

		// checking empty fields
		if(empty($loc)) {
			echo "<font color='black'>Location field is empty.</font><br/>";
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty)

			//insert data to database
			$result = mysqli_query($mysqli, "INSERT INTO Branch (loc) VALUES ('$loc')");
			
			//display success message
			echo "<br/><a href='Branch.php'>Branch</a>";
		}
	}
?>