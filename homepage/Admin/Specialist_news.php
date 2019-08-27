<!DOCTYPE html>
<html>
<head>
</head>
<body>

  	<?php 
    $conn = mysqli_connect('', 'root', '', 'agrofirmit');
			if(!$conn)
			{
						echo "DB Error: ".mysqli_connect_error();

			}
			else
			{
				$sql = "SELECT * FROM `specialist_report` ";
				$result = mysqli_query($conn, $sql);
			}

		echo "<br/> <center>
				<table border='1'>
    		<tr>
					<td width='5%'>Serial No</td>
					<td width='10%'>Farmer Contact </td>
					<td width='10%'>Specialist ID </td>
					<td width='70%'>Specialist Report</td>
					<td width='10%'>Comment</td>
				</tr>";

	
		while($row= mysqli_fetch_assoc($result))
		{
			echo "<tr>
					<td width='5%'>".$row['ID']."</td>
					<td width='8%'>".$row['Owner_ID']."</td>
					<td width='8%'>".$row['Specialist_ID']."</td>
					<td width='70%'>".$row['Specialist_Report']."</td>
					<td width='10%'>".$row['Comment']."</td>		
				</tr>";

		}
				
		echo "</table>
				</center>";
		mysqli_close($conn);
		
	

?>     
</body>
</html> 
