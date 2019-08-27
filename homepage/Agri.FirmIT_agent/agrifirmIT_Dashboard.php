<?php
		error_reporting(0);
		session_start();
		$userpk=$_SESSION['username'];

?>

<?php
    if(!isset($_SESSION["username"]))
    {
        header("Location: ../../Login/login.php");
    }
?>	


<!DOCTYPE html>
<html>
<head>
	<title>.: Home :.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
<style>
	body	
	{
		margin:0 auto;
		background: url("img.jpg") no-repeat;
		background-size: 100%;	
		font-family: 'Open Sans', sans-serif;
	}
	
			.form_area
			{
				position: absolute;	
				height: 50px;
				width: 100%;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 4px;
			}
		.form_inner_area
			{
				top:1%;
				height: 200px;
				width: 300px;
				position: absolute;
				right: 0.2%;	

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
			width: 99.3%;
			padding: 12px 20px;
			margin: 3px 3px;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
		.form_area2
			{
				position: absolute;
				left: 35%;
				top:12%;				
				height: 485px;
				width: 350px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 4px;
			}
			.form_inner_area2
			{
				top:1%;
				height: 200px;
				width: 300px;
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
</head>
<body>
	<form method="post" >
<div class="form_area">
		<input type="text" name="fname" size="30" value="<?php echo'USER_ID: $userpk' ;?>" disabled;/>
		<div class="form_inner_area">
        	<button type = "button" name="agent_profile" onclick="(location.href='AgentProfile.php')"> Profile </button>
			<button type = "button" onclick="(location.href='Logout.php')" >Logout</button>
		</div>
	</div>
	<div class="form_area2">
		<div class="form_inner_area2">
			<center> <button type = "button" class="w3-btn-agriIT w3-blue" name="farmer_reg" onclick="(location.href='farmerReg.php')" >Farmer Registration  </button>  
			<button type = "button" class="w3-btn-agriIT w3-blue" name="agriIT_reg" value="agriIT_reg" type="submit" onclick="(location.href='AgriITReg.php')" >AgriIT Registration   </button>
			<button type = "button" class="w3-btn-agriIT w3-blue" name="farmer_landactivity_change" value="farmer_landactivity_change" onclick="(location.href='ChangeLandActivity.php')" type="submit" >Farmer Land Activity Customize  </button>
			</center>
        	
		</div>
	</div>
		<div class="copyright">
		&copy; 2017-<?php echo date("Y");?>  by AgriFirm.IT. ALL Rights Reserved
	</div>
</form>
</body>
</html>