<?php
error_reporting(0);
session_start();
$sp_id= $_SESSION['username'];
?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>ADD LAND STATUS </b></legend>
	<center><?php include_once "AgriSpecialistheader.php";?></center>
	
	<style rel="stylesheet">
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 98.4%;
				width: 400px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;

			}
			.form_inner_area
			{
				top:1%;
				height: 200px;
				width: 600px;
				position: absolute;
				left: 50px;						
			}
	body	
	{
		margin:0 auto;
		background: url("img/land_activity.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}
	.error {
		color: #FF0000;
		//display: inline-block;
	}
	input[type=submit] {
			width: 50%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;
			
			
		}
		
			input[type=submit]:hover {
			background-color: #45a049;
		}

		
		input[type=text] {
			width: 50%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
			input[type=password] {
			width: 50%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
		select {
			width:24.65%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
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
<fieldset>
    
	<center>
	
		<form method="post" action="addreportCheck.php">
			<br/>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Farmer ID</td>
					<td>:</td>
					<td> <input name="farmarID" id = "farmarID" type="text" placeholder="Farmer Phone"> </td>
					</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Specialist ID</td>
					<td>:</td>
					<td><input name="sID" id = "sID" type="text" value= " <?php echo "$sp_id"; ?>" readonly  > </td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>

					
				<tr>
					<td>Report</td>
					<td>:</td>
					<td><input name="report" id = "report" type="text" value="" placeholder="Report Details">  </td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>Comment</td>
					<td>:</td>
					<td>
						<input name="comment" id="comment" type="text" value="" placeholder="Comment">
					</td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
						</fieldset>
					</td>
				</tr>
						
			</table>
				<hr/><br/>
				<input type="submit" id="submit" name="submit" value="Submit">
				<a href = "S_Specialist_Report.php"> Show Report </a>
		</form>
	</center>
</fieldset>


</body>
</html>

