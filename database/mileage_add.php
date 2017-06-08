<h1>New Mileage Plan</h1>
<?php

	include_once("dbconfig.php");
	
	if(isset($_POST['Submit'])){
		$mnum = mysqli_real_escape_string($mysqli, $_POST['mnum']);
		$description = mysqli_real_escape_string($mysqli, $_POST['description']);

		// checking empty fields
		if(empty($description) || empty($mnum)) {
			if(empty($description)){
				echo "<font color='black'>Plan Description field is empty.</font><br/>";
			} else{
				echo "<font color='black'>Plan Number field is empty.</font><br/>";
			}
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty)

			//insert data to database
			$result = mysqli_query($mysqli, "INSERT INTO Mileage (mnum, description) VALUES ('$mnum', '$description')");
			
			//display success message
			echo "<br/><a href='Mileage.php'>Mileage Plan</a>";
		}
	}
?>