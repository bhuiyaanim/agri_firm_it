<?php
	error_reporting(0);
	session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<legend><b>Change Land Activity</b></legend>
	</head>
	
	<body>
	<form method="post" action="ChangeLandActivity.php">
		<center>
			<div>
				<input name="phnumber" id="ph_num" type="text" value="" placeholder="Enter phone number" onkeyup="loadData()">
				<button type="submit" name="search" id="search" value="Submit" onclick="numberCheck()">Search</button>
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
				$sql = "SELECT * FROM `farmer_land_activity` WHERE `phone`= '$num' ";
				$result = mysqli_query($conn, $sql);
				$_SESSION['phone'] = $num;
				
			}
		}
		
	}
	
		while($row= mysqli_fetch_assoc($result)){
			
			echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Fertilization</td>
					<td>Irrigation</td>
					<td>Medicine</td>
					<td>Watering</td>
					<td>Planting</td>
				</tr>";
			
			echo "<tr>
					<td>".$row['Fertilization']."</td>
					<td>".$row['Irrigation']."</td>
					<td>".$row['Medicine']."</td>
					<td>".$row['Watering']."</td>
					<td>".$row['Planting']."</td>	
				</tr>
				<tr>
					<td colspan='5'>
					<center>
						<a href='edit.php'>
							<button type='submit' name='edit' id='edit' value='edit'>Edit</button> ";
							$_SESSION['button'] = "set";
				echo	"</a>
					</center>
					</td>
				</tr>
				";

		}
				
		echo "</table>
				</center>";
		mysqli_close($conn);
		
	

?>