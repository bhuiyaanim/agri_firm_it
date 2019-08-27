<?php
	error_reporting(0);
	session_start();
	
	if(isset($_SESSION)){
		$editcheck=$_SESSION['phone'];
		$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			
		if(!$conn){
			echo "DB Error: ".mysqli_connect_error();
		}
		else
		{
			$sql = "SELECT * FROM `farmer_land_activity` WHERE `phone`= '$editcheck' ";
			$result = mysqli_query($conn, $sql);
			
			
		}
		
		while($row= mysqli_fetch_assoc($result)){
			$Fertilization = $row['Fertilization'];
			$Irrigation = $row['Irrigation'];
			$Medicine = $row['Medicine'];
			$Watering = $row['Watering'];
			$Planting = $row['Planting'];	
		}
		mysqli_close($conn);
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>Edit</b></legend>
</head>

<body>
<fieldset>
    
	<center>
	
		<form method="post" action="editCheck.php">
			<br/>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Fertilization</td>
					<td>:</td>
					<td><input name="fertilization" id = "fertilization" type="text"  value="<?php echo $Fertilization; ?>" placeholder="Enter Fertilization InFo" onkeyup="fertilizationCheck()"></td>
					
					<td><img style="visibility:hidden;" id="fertilizationalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
					</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>Irrigation</td>
					<td>:</td>
					<td><input name="irrigation" id = "irrigation" type="text"  value="<?php echo $Irrigation; ?>" placeholder="Enter Irrigation InFo" onkeyup="irrigationCheck()"></td>
					
					<td><img style="visibility:hidden;" id="irrigationalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
					</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>Medicine</td>
					<td>:</td>
					<td><input name="medicine" id = "medicine" type="text"  value="<?php echo $Medicine; ?>" placeholder="Enter Medicine InFo" onkeyup="medicineCheck()"></td>
					
					<td><img style="visibility:hidden;" id="medicinealt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
					</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>Watering</td>
					<td>:</td>
					<td><input name="watering" id = "watering" type="text"  value="<?php echo $Watering; ?>" placeholder="Enter Watering InFo" onkeyup="wateringCheck()"></td>
					
					<td><img style="visibility:hidden;" id="wateringalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
					</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>Planting</td>
					<td>:</td>
					<td><input name="planting" id = "planting" type="text"  value="<?php echo $Planting; ?>" placeholder="Enter Planting InFo" onkeyup="plantingCheck()"></td>
					
					<td><img style="visibility:hidden;" id="plantingalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
					</tr>		
							
			</table>
				<hr/><br/>
				<input type="submit" id="submit" name="submit" value="Submit" >
				
		</form>
	</center>

</fieldset>

	<script>
	
		var n1 = false;
		var n2 = false;
		var n3 = false;
		var n4 = false;
		var n5 = false;
		
		function fertilizationCheck(){
			var fer = document.getElementById('fertilization').value;
			if (fer != ""){
				if(characters(fer)){
					if(fer.length >= 5){
						document.getElementById('fertilizationalt').src = "done.png";
						fertilizationalt.style.visibility = "visible";
						n1 = true;
						if(n1 == true || n2 == true || n3 == true || n4 == true || n5 == true){
							document.getElementById('submit').disabled=false;
						}
						
					}
					else{
						document.getElementById('fertilizationalt').src = "cross.png";
						fertilizationalt.style.visibility = "visible";
					}
				}
				else{
					document.getElementById('fertilizationalt').src = "cross.png";
					fertilizationalt.style.visibility = "visible";
				}
			}
			else{
				document.getElementById('fertilizationalt').src = "cross.png";
				fertilizationalt.style.visibility = "visible";
			}
		}
		
		function irrigationCheck(){
			var irr = document.getElementById('irrigation').value;
			if (irr != ""){
				if(characters(irr)){
					if(irr.length >= 5){
						document.getElementById('irrigationalt').src = "done.png";
						irrigationalt.style.visibility = "visible";
						n2 = true;
						if(n1 == true || n2 == true || n3 == true || n4 == true || n5 == true){
							document.getElementById('submit').disabled=false;
						}
						
					}
					else{
						document.getElementById('irrigationalt').src = "cross.png";
						irrigationalt.style.visibility = "visible";
					}
				}
				else{
					document.getElementById('irrigationalt').src = "cross.png";
					irrigationalt.style.visibility = "visible";
				}
			}
			else{
				document.getElementById('irrigationalt').src = "cross.png";
				irrigationalt.style.visibility = "visible";
			}
		}
		
		function medicineCheck(){
			var med = document.getElementById('medicine').value;
			if (med != ""){
				if(characters(med)){
					if(med.length >= 5){
						document.getElementById('medicinealt').src = "done.png";
						medicinealt.style.visibility = "visible";
						n3 = true;
						if(n1 == true || n2 == true || n3 == true || n4 == true || n5 == true){
							document.getElementById('submit').disabled=false;
						}
						
					}
					else{
						document.getElementById('medicinealt').src = "cross.png";
						medicinealt.style.visibility = "visible";
					}
				}
				else{
					document.getElementById('medicinealt').src = "cross.png";
					medicinealt.style.visibility = "visible";
				}
			}
			else{
				document.getElementById('medicinealt').src = "cross.png";
				medicinealt.style.visibility = "visible";
			}
		}
		
		function wateringCheck(){
			var wat = document.getElementById('watering').value;
			if (wat != ""){
				if(characters(wat)){
					if(wat.length >= 5){
						document.getElementById('wateringalt').src = "done.png";
						wateringalt.style.visibility = "visible";
						n4 = true;
						if(n1 == true || n2 == true || n3 == true || n4 == true || n5 == true){
							document.getElementById('submit').disabled=false;
						}
						
					}
					else{
						document.getElementById('wateringalt').src = "cross.png";
						wateringalt.style.visibility = "visible";
					}
				}
				else{
					document.getElementById('wateringalt').src = "cross.png";
					wateringalt.style.visibility = "visible";
				}
			}
			else{
				document.getElementById('wateringalt').src = "cross.png";
				wateringalt.style.visibility = "visible";
			}
		}
		
		function plantingCheck(){
			var pla = document.getElementById('planting').value;
			if (pla != ""){
				if(characters(pla)){
					if(pla.length >= 5){
						document.getElementById('plantingalt').src = "done.png";
						plantingalt.style.visibility = "visible";
						n5 = true;
						if(n1 == true || n2 == true || n3 == true || n4 == true || n5 == true){
							document.getElementById('submit').disabled=false;
						}
						
					}
					else{
						document.getElementById('plantingalt').src = "cross.png";
						plantingalt.style.visibility = "visible";
					}
				}
				else{
					document.getElementById('plantingalt').src = "cross.png";
					plantingalt.style.visibility = "visible";
				}
			}
			else{
				document.getElementById('plantingalt').src = "cross.png";
				plantingalt.style.visibility = "visible";
			}
		}
		
		
		
		
		
		function characters(loc){
			var n = true;
			for(var i=0; i<loc.length; i++){
				if(loc[i] != '!' && loc[i] != '@' && loc[i] != '#' && loc[i] != '$' && loc[i] != '%' && loc[i] != '^' && loc[i] != '*' && loc[i] != ')' && loc[i] != '_' && loc[i] != '=' && loc[i] != '+' && loc[i] != '`' && loc[i] != '~' && loc[i] != '[' && loc[i] != '{' && loc[i] != ']' && loc[i] != '}' && loc[i] != '|' && loc[i] != ':' && loc[i] != ';' && loc[i] != '<' && loc[i] != '>' && loc[i] != '?' && loc[i] != '/'){
					if(loc[i]>='a' && loc[i]<='z'){
						n = true;	
					}
					else {
						n = false;
						break;
					}
				}
			}	
			if (n == true ){
				return true ;
			}
			else {
				return false ;
			}	
			
		}
		
	</script> 


</body>
</html>
		
