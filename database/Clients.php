<h1> Clients </h1>
<li><a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/home.php">Home</a><br></li>

<?php
	include_once 'dbconfig.php';
	$result = mysqli_query($mysqli,"SELECT * FROM Clients");
?>	

<html>
<head>
</head>
<body>
	<table width='50%' border=1>
		<tr bg color='#CCCCCC'>
			<td>ID</td>
			<td>Name</td>
			<td>Address</td>
			<td>Phone</td>
			<td>License</td>
			<td>From Corporation</td>
		</tr>
		<?php
			while($res = mysqli_fetch_array($result)){
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
	</table><br>
	<a href="Clients_add.html">Add New Clients</a><br/><br/>
</body>
</html>