<?php
	error_reporting(0);
	session_start();
?>



<!DOCTYPE html>
<html>
	<head>

		<style>
	
	body	
	{
		margin:0 auto;
		background: url("trending.png") no-repeat;
		background-size: 100%;
		font-family: "Times New Roman", Times, serif;
	}
			.form_area
			{
				position: absolute;	
				height: 50px;
				width: 100%;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 2px;
			}
		.form_inner_area
			{
				top:1%;
				height: 200px;
				width: 600px;
				position: absolute;
				left: 50px;						
			}
			
			.form_inner_area button {
				
			width: 49%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 2.5px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:45%;
			}
			
			button:hover {
			background-color: #45a049;
		}
		
		.form_area input[type=text]{
			width: 50%;
			padding: 8px 10px;
			margin: 3px 0;
			display: inline-block;
			border: 0.5px solid #ccc;
			border-radius: 2px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
		.form_area2
			{
				position: absolute;
				left: 20%;
				top:10%;				
				height: 300px;
				width: 250px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 4px;
			}
			.form_inner_area2
			{
				top:1%;
				height: 100px;
				width: 150px;
				position: absolute;
				left: 25px;	

			}
			
			.form_inner_area2 button {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;	
			
		}
		.form_inner_area2 button:hover {
			background-color: #45a049;
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

		<center><legend><b>Products</b></legend></center>
		<center><?php include_once "Advertisement.php";?></center>
	</head>
	
	<body>
	<form method="post" action="S_Land_info.php">
		<center>
			<div>
				<button type="button" name="home" id="home" value="Home" onclick="location.href='Farmer_dashboard.php';">Home </button>
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
				

				$sql = "SELECT * FROM `comapany_product` WHERE `Product_Grade`= 'AAAAA' ";
				$result = mysqli_query($conn, $sql);

				$rn2 = mysqli_num_rows($result);
			}
		}

		echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
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