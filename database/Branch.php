<?php
	include_once 'dbconfig.php';
	$result = mysqli_query($mysqli,"SELECT * FROM Branch");
?>	

<html>
	<h1> Branch </h1>
<head>
</head>
<body>
	<table width='100%' border=1>
		<tr bg color='#CCCCCC'>
			<td>ID</td>
			<td>Location</td>
			<td>Delete?</td>
		</tr>
		<?php
			while($res = mysqli_fetch_array($result)){
				echo "<tr>
					<td>".$res['id']."</td>
					<td>".$res['loc']."</td>";
				echo "<td><a href=\"branch_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this Branch?')\">Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table><br>
	<a href="branch_add.html">Add New Branch</a><br/><br/>
	<a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/home.php">Home</a><br/><br/>
</body>
</html>