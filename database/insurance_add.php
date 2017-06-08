<h1>New Insurance Policy</h1>
<?php

	include_once("dbconfig.php");
	
	if(isset($_POST['Submit'])){
		$pnum = mysqli_real_escape_string($mysqli, $_POST['pnum']);
		$description = mysqli_real_escape_string($mysqli, $_POST['description']);

		// checking empty fields
		if(empty($description) || empty($pnum)) {
			if{empty($description)}{
				echo "<font color='black'>Policy Description field is empty.</font><br/>";
			} else{
				echo "<font color='black'>Policy Number field is empty.</font><br/>";
			}			
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty)

			//insert data to database
			$result = mysqli_query($mysqli, "INSERT INTO Insurance (pnum, description) VALUES ('$pnum', '$description')");
			
			//display success message
			echo "<br/><a href='Insurance.php'>Insurance Policy</a>";
		}
	}
?>