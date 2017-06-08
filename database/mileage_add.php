<h1>New Mileage Plan</h1>
<?php

	include_once("dbconfig.php");
	
	if(isset($_POST['Submit'])){
		$description = mysqli_real_escape_string($mysqli, $_POST['description']);

		// checking empty fields
		if(empty($description)) {
			echo "<font color='black'>Plan Description field is empty.</font><br/>";
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty)

			//insert data to database
			$result = mysqli_query($mysqli, "INSERT INTO Mileage (description) VALUES ('$description')");
			
			//display success message
			echo "<br/><a href='Mileage.php'>Mileage Plan</a>";
		}
	}
?>