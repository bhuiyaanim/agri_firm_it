<?php
	error_reporting(0);
	session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<center><legend><b>Equipments</b></legend></center>
	
	</head>
	
	<body>
	<form method="post" action="S_Land_info.php">
		<center>
			<div>
				<button type="button" name="home" id="home" value="Home" onclick="location.href='index.php';">Home </button>
			</div>
			<div id="result">
			
			</div>
		</center>
	</form>

	</body>
</html>

<?php
	if(isset($_GET['status']))
				
echo "";			
			{
			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			if(!$conn){
						echo "DB Error: ".mysqli_connect_error();

			}
			else
			{
				

				$sql = "SELECT * FROM `comapany_product` ";
				$result = mysqli_query($conn, $sql);

				$rn3 = mysqli_num_rows($result);
			}
		}

		echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Serial No</td>
					<td>HotLine</td>
					<td>Product Name</td>
					<td>Arrival Type</td>
					<td>Product Type</td>
					<td>Product Grade</td>
					<td>Product Specialites</td>
					<td>Product Expiry Date</td>
					<td>Product Avilable Status</td>
					<td>Product Price</td>
				</tr>";

	
		while($row= mysqli_fetch_assoc($result))
		{
				
			
			echo "<tr>
					<td>".$row['S.L']."</td>
					<td>".$row['phone']."</td>
					<td>".$row['Product_Name']."</td>
					<td>".$row['Product_Arrival_Type']."</td>
					<td>".$row['Product_Type']."</td>	
					<td>".$row['Product_Grade']."</td>	
					<td>".$row['Product_SPECIALITES']."</td>
					<td>".$row['Product_ExpairDATE']."</td>	
					<td>".$row['Product_Avilable']."</td>	
					<td>".$row['Product_price']."</td>		
				</tr>";

		}
				
		echo "</table>
				</center>";
		mysqli_close($conn);
		
	

?>