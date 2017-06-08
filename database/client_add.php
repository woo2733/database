<h1>New Client</h1>
<?php

	include_once("dbconfig.php");
	
	if(isset($_POST['Submit'])){
		$cname = mysqli_real_escape_string($mysqli, $_POST['cname']);
		$cadd = mysqli_real_escape_string($mysqli, $_POST['cadd']);
		$cphone = mysqli_real_escape_string($mysqli, $_POST['cphone']);
		$license = mysqli_real_escape_string($mysqli, $_POST['license']);

		// checking empty fields
		if(empty($cname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty)

			//insert data to database
			$result = mysqli_query($mysqli, "INSERT INTO Clients (cname, cadd, cphone, license) VALUES ('$cname', '$cadd', '$cphone', '$license')");
			
			//display success message
			echo "<font color='green'>Data added successfully.";
			echo "<br/><a href='Clients.php'>View Result</a>";
		}
	}
?>