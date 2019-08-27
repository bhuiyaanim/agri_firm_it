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
		background: url("info.jpg") no-repeat;
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

		<center><legend><b>Land Info</b></legend></center><br/>
		<center><?php include_once "AgriSpecialistheader.php";?></center>
	</head>
	
	<body>
	<form method="post" action="deleteCheck.php">
		<center>
			<div>
				<input name="phnumber" id="ph_num" type="text" value="" placeholder="Enter phone number">
				<button type="submit" name="delete" id="delete" value="delete" >Delete</button>
				<button type="button" name="home" id="home" value="Home" onclick="location.href='AdminDashboard.php';">Home </button>
			</div>
			<div id="result">
			
			</div>
		</center>
	</form>

		</body>
</html>
