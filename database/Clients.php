<?php

	include_once 'dbconfig.php';
	$sql = "SELECT * FROM Clients";
	$result = $result->query($sql);
	
	if($result->num_rows > 0){
		echo '<h1>Clients</h1>
			<table>
			<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Address</td>
			<td>Phone</td>
			<td>License</td>
			<td>From Corporation</td>
			</tr>'
		while($row = $result->fetch_assoc()){
			echo '
			<tr>
			<td>$row["cid"]</td>
			<td>$row["cname"]</td>
			<td>$row["cadd"]</td>
			<td>$row["cphone"]</td>
			<td>$row["license"]</td>
			<td>$row["iscorp"]</td>
			</tr>'
		}
	}
	
?>