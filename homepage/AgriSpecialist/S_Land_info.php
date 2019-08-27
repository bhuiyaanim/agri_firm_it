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
	<form method="post" action="S_Land_info.php">
		<center>
			<div>
				<input name="phnumber" id="ph_num" type="text" value="" placeholder="Enter phone number" onkeyup="loadData()">
				<button type="submit" name="search" id="search" value="Submit" onclick="numberCheck()">Search</button>
				<button type="button" name="home" id="home" value="Home" onclick="location.href='Agri_specialist_dashboard.php';">Home </button>
			</div>
			<div id="result">
			
			</div>
		</center>
	</form>
	
	<script>
		function numberCheck(){
			var num = document.getElementById('ph_num').value;
			if (num != ""){
				if(IsNumber(num)){
					if (num.length >= 11){
						
					}
					else {
						alert("Number has to be atlist 11 digits");
					}
				}
				else {
					alert("The input is not a number");
				}
			}
			else{
				alert("Null input is not acceptable");
			}
		}
			
		function IsNumber(num){
			var n = true;
			for(var i=0; i<num.length; i++){
				if(num[i]>='0' && num[i]<='9'){
					n = true;	
				}
				else {
					n = false ;
					break ;
				}
			}
				
			if (n == true){
				return true ;
			}
			else {
				return false ;
			}
							
		}
		
		function loadData(){
			var  = new XMLHttpRequest();

			ajax.open('POST', 'ajax_search.php', true);
			ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
			var show = "key="+document.getElementById('ph_num').value;
			ajax.send(show);

			ajax.onreadystatechange = function(){
				if(this.readyState == 4 && this.status==200)
				{
					alert(this.responseText);
				}
			}

		}

		function show(data){
			document.getElementById('ph_num').value=data;
			document.getElementById('result').innerHTML="";
		}	
		</script>
	</body>
</html>

<?php
	if(isset($_POST['search'])){
		
		$num = trim($_POST['phnumber']);
		
		$check = $_POST['search'];
		if($check == Submit){
			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			if(!$conn){
						echo "DB Error: ".mysqli_connect_error();
			}
			else
			{
				$sql = "SELECT * FROM `farmer_land_info` WHERE `phone`= '$num' ";
				$result = mysqli_query($conn, $sql);
				$_SESSION['phone'] = $num;
				
			}
		}
		
	}
	
		while($row= mysqli_fetch_assoc($result)){
			
			echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Phone</td>
					<td>Location</td>
					<td>Area</td>
					<td>Land Type</td>
					<td>SA DAG</td>
					<td>RS DAG</td>
					<td>Mouja</td>
				</tr>";
			
			echo "<tr>
					<td>".$row['Phone']."</td>
					<td>".$row['Location']."</td>
					<td>".$row['Area']."</td>
					<td>".$row['Land Type']."</td>
					<td>".$row['SA DAG']."</td>	
					<td>".$row['RS DAG']."</td>	
					<td>".$row['Mouja']."</td>	
				</tr>
				";

		}
				
		echo "</table>
				</center>";
		mysqli_close($conn);
		
	

?>