<?php

	include_once 'dbconfig.php';
	$result = mysqli_query($mysqli,"SELECT * FROM Clients");
?>	

<html>
<head>
	<title>Clients</title>
</head>
<body>
	<a href="Clients_add.html">Add New Clients</a><br/><br/>
		<table>
			<tr bg color='#CCCCCC'>
				<td>ID</td>
				<td>Name</td>
				<td>Address</td>
				<td>Phone</td>
				<td>License</td>
				<td>From Corporation</td>
			</tr>
			<?php
				while($res = mysql_fetch_array($result)){
					echo "<tr>
						<td>".$row['cid']."</td>
						<td>".$row['cname']."</td>
						<td>".$row['cadd']."</td>
						<td>".$row['cphone']."</td>
						<td>".$row['license']."</td>
						<td>".$row['iscorp']."</td>
						</tr>"
				}
			?>
		</table>
</body>
</html>