<ol>
	<li><a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/home.php">Home</a><br></li>
	<li><a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/Clients.php">Clients</a><br></li>
	<li><a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/Branch.php">Branch</a><br></li>
	<li><a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/Insurance.php">Insurance</a><br></li>
	<li><a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/Mileage.php">Mileage</a><br></li>
	<li><a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/Reservations.php">Reservations</a><br></li>
</ol>

<?php
	include_once 'dbconfig.php';
	$result = mysqli_query($mysqli,"SELECT * FROM Clients");
?>	

<html>
<head>
	<title>Clients</title>
	<style>table{
		border: 1px solid;
	}
	</style>
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
						<td>".$res['cid']."</td>
						<td>".$res['cname']."</td>
						<td>".$res['cadd']."</td>
						<td>".$res['cphone']."</td>
						<td>".$res['license']."</td>
						<td>".$res['iscorp']."</td>
						</tr>";
				}
			?>
		</table>
</body>
</html>