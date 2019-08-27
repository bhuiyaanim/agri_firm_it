<?php
	error_reporting (0);
	session_start();
	$username = $_SESSION['username'];
	
	$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$idflag="";
			
			
			$sqlcheck = " SELECT * FROM `farmer_land_activity` WHERE `phone` = '$username' ";
			$result1 = mysqli_query($conn,$sqlcheck);
			if (mysqli_num_rows($result1)==0)
			
			{
				echo "<script>
					alert('No results found!');
					window.location.href='../../homepage/Farmer/Farmer_dashboard.php';
				</script>";
			}
			else
			{
				$idflag = 1;
			}

	
	if($idflag == 1){
		 echo "<table align='center'><tr><th>Fertilization</th><th>Irrigation</th><th>Medicine</th><th>Watering</th><th>Planting</th></tr>";
			 // output data of each row
		while($row_detail = mysqli_fetch_assoc($result1))
					{	
					  echo "<tr><td>" . $row_detail["Fertilization"]. "</td><td>" . $row_detail["Fertilization"]. "</td><td>" . $row_detail["Irrigation"]. " " . $row_detail["Medicine"]. "</td><td>" . $row_detail["Watering"]. "</td>
					 <td>" . $row_detail["Planting"]."</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>.: Land Activity :.</title>
<style>
	body	
	{
		margin:0 auto;
		background: url("img/land_activity.jpg") no-repeat;
		background-size: 100%;	
		font-family: 'Open Sans', sans-serif;
	}

	table
	{
	 width:90%;
	 font-family:inherit;
	 font-weight:bold;
	 color: #FFFAFA ;
	}
	th {
		color:#00FF00;
	}
	table,td,th
	{
	 border-collapse:collapse;
	 border:solid #d0d0d0 1px;
	 padding:15px;
	 text-align: center;
	}
		.copyright {
		position: absolute;				
		height: 6%;
		width: 20%;
		position: absolute;				
		background-color:#f1f1f1;
		opacity:.9;
		border-radius: 4px;
		bottom: 1%;
		right: .5%;
		text-align: center;
	}
</style>
</head>
<body>
	
</body>
</br>
<div class="copyright">
		&copy; 2017-<?php echo date("Y");?>  by Agri.FirmIT. All Rights Reserved
	</div>
</html>

<?php

mysqli_close($conn);

?>