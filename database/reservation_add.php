<h1>New Reservation</h1>
<?php

	include_once("dbconfig.php");
	
	if(isset($_POST['Submit'])){
		$rnum = mysqli_real_escape_string($mysqli, $_POST['rnum']);
		$cid = mysqli_real_escape_string($mysqli, $_POST['cid']);
		$ins = mysqli_real_escape_string($mysqli, $_POST['ins']);
		$mil = mysqli_real_escape_string($mysqli, $_POST['mil']);
		$start = mysqli_real_escape_string($mysqli, $_POST['start']);
		$end = mysqli_real_escape_string($mysqli, $_POST['end']);

		// checking empty fields
		if(empty($cid) || empty($rnum)) {
			if(empty($cid)){
				echo "<font color='black'>Client ID field is empty.</font><br/>";
			} else{
				echo "<font color='black'>Reservation Number field is empty.</font><br/>";
			}
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty)

			//insert data to database
			$result = mysqli_query($mysqli, "INSERT INTO Reservations (rnum, cid,ins,mil,start,end) VALUES ('$rnum', '$cid', '$ins', '$mil', '$start', '$end')");
			
			//display success message
			echo "<br/><a href='Reservations.php'>Reservations</a>";
		}
	}
?>