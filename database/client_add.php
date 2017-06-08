<h1>New Client</h1>
<?php

	include_once("dbconfig.php");
	
	if(isset($_POST['Submit'])){
		$cid = mysqli_real_escape_string($mysqli, $_POST['cid']);
		$cname = mysqli_real_escape_string($mysqli, $_POST['cname']);
		$cadd = mysqli_real_escape_string($mysqli, $_POST['cadd']);
		$cphone = mysqli_real_escape_string($mysqli, $_POST['cphone']);
		$license = mysqli_real_escape_string($mysqli, $_POST['license']);

		// checking empty fields
		if(empty($cname) || empty($cid)) {
			if(empty($cname)){
				echo "<font color='black'>Name field is empty.</font><br/>";
			} else{
				echo "<font color='black'>Client ID field is empty.</font><br/>";
			}
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty)

			//insert data to database
			$result = mysqli_query($mysqli, "INSERT INTO Clients (cid, cname, cadd, cphone, license) VALUES ('$cid', '$cname', '$cadd', '$cphone', '$license')");
			
			//display success message
			echo "<font color='black'>Success!</font><br/>";
			echo "<br/><a href='Clients.php'>Clients</a>";
		}
	}
?>