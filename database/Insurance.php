<?php
	include_once 'dbconfig.php';
	$result = mysqli_query($mysqli,"SELECT * FROM Insurance");
?>	

<html>
<head>
	<h1> Insurance Policy</h1>
</head>
<body>
	<table width='100%' border=1>
		<tr bg color='#CCCCCC'>
			<td>Policy Number</td>
			<td>Policy Description</td>
			<td>Delete?</td>
		</tr>
		<?php
			while($res = mysqli_fetch_array($result)){
				echo "<tr>
					<td>".$res['pnum']."</td>
					<td>".$res['description']."</td>";
				echo "<td><a href=\"insurance_delete.php?pnum=$res[pnum]\" onClick=\"return confirm('Are you sure you want to delete this Insurance Policy?')\">Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table><br>
	<a href="branch_add.html">Add New Insurance Policy</a><br/><br/>
	<a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/home.php">Home</a><br/><br/>
</body>
</html>