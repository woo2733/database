<h1> Reservations </h1>
<a href = "http://webtech.kettering.edu/~woo2733/Assignment4/database/database/home.php">Home</a><br/><br/>

<?php
	include_once 'dbconfig.php';
	$result = mysqli_query($mysqli,"SELECT * FROM Reservations");
?>	

<html>
<head>
</head>
<body>
	<table width='100%' border=1>
		<tr bg color='#CCCCCC'>
			<td>Reservation Number</td>
			<td>Client ID</td>
			<td>Insurance Policy</td>
			<td>Mileage Plan</td>
			<td>Start Date</td>
			<td>End Date</td>
			<td>Delete?</td>
		</tr>
		<?php
			while($res = mysqli_fetch_array($result)){
				echo "<tr>
					<td>".$res['rnum']."</td>
					<td>".$res['cid']."</td>
					<td>".$res['ins']."</td>
					<td>".$res['mil']."</td>
					<td>".$res['start']."</td>
					<td>".$res['end']."</td>";
				echo "<td><a href=\"client_delete.php?rnum=$res[rnum]\" onClick=\"return confirm('Are you sure you want to delete this Reservation?')\">Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table><br>
	<a href="reservation_add.html">Reserve a Car</a><br/><br/>
</body>
</html>