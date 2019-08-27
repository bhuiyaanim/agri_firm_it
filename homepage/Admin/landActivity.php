<?php
	error_reporting(0);
	session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<legend><b>Land Info</b></legend>
	</head>
	
	<body>
	<form method="post" action="landActivity.php">
		<center>
			<div>
				<button type="button" name="home" id="home" value="Home" onclick="location.href='AdminDashboard.php';"> Home </button>
			</div>
			<div id="result">
			
			</div>
		</center>
	</form>

	</body>
</html>

<?php
	if(isset($_GET['status']))
							
			{
			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			if(!$conn){
						echo "DB Error: ".mysqli_connect_error();

			}
			else
			{
				

				$sql = "SELECT * FROM `farmer_land_activity`";
				$result = mysqli_query($conn, $sql);

				$rn = mysqli_num_rows($result);
			}
		}

		echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Fertilization</td>
					<td>Irrigation</td>
					<td>Medicine</td>
					<td>Watering</td>
					<td>Planting</td>
					<td>phone</td>
				</tr>";

	
		while($row= mysqli_fetch_assoc($result))
		{
			
			echo "<tr>
					<td>".$row['Fertilization']."</td>
					<td>".$row['Irrigation']."</td>
					<td>".$row['Medicine']."</td>
					<td>".$row['Watering']."</td>
					<td>".$row['Planting']."</td>	
					<td>".$row['phone']."</td>		
				</tr>";

		}
				
		echo "</table>
				</center>";
		mysqli_close($conn);
		
	

?>