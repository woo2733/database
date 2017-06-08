<?php
	include_once 'dbconfig.php';
	$result = mysqli_query($mysqli,"SELECT * FROM Mileage");
?>	

<html>
<head>
	<h1> Mileage Plan </h1>
	<a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/home.php">Home</a><br/><br/>
</head>
<body>
	<table width='100%' border=1>
		<tr bg color='#CCCCCC'>
			<td>Mileage Plan</td>
			<td>Plan Description</td>
			<td>Delete?</td>
		</tr>
		<?php
			while($res = mysqli_fetch_array($result)){
				echo "<tr>
					<td>".$res['mnum']."</td>
					<td>".$res['description']."</td>";
				echo "<td><a href=\"mileage_delete.php?mnum=$res[mnum]\" onClick=\"return confirm('Are you sure you want to delete this Mileage Plan?')\">Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table><br>
	<a href="mileage_add.html">Add New Mileage Plan</a><br/><br/>
</body>
</html>