<?php
	error_reporting (0);
	session_start();
		if (($_COOKIE['AgriSpecialist']) == "AgriSpecialist")
		{
			$idflag = 1;
		}
		else if(isset($_SESSION['username'])){
			if (($_SESSION['type']) == "AgriSpecialist")
				{
					$idflag = 1;
				}
		}
	
	if($idflag == 1){
		


?>
<head>

	<style>
	
	body	
	{
		margin:0 auto;
		background: url("welcome.jpg") no-repeat;
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
			
			<legend><b>Home Page</b></legend>
</head>
<fieldset>
	<center><?php include_once "AgriSpecialistheader.php";?></center>
	<form>
		<br/>
		<input type="button" onclick="location.href='S_Land_info.php';" value="Land Information" /><br/><br/>
		<input type="button" onclick="location.href='S_Other_companis.php';" value="Company Production" /><br/><br/>
		<input type="button" onclick="location.href='S_Specialist_Report.php';" value="Specialist Report" /><br/><br/>
		<input type="button" onclick="location.href='S_Specialist_Report_Add.php';" value=" Add Report" /><br/><br/>
		<input type="button" onclick="location.href='Logout.php';" value="Log Out" /><br/><br/>
	</form>
	<center><?php include_once "../head&foot/footer.php";?></center>
	
</fieldset>

<?php
	}
	else{
		header("location: ../Login.php?status=invalidrequest");
	}
?>