<?php
	error_reporting(0);
 	$notification_id = $_GET['status'];

 	$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlget_noti_data = " SELECT `notification_data` FROM `agrifarmit_notification` WHERE `notification_id` = '$notification_id'";
			$result1 = mysqli_query($conn,$sqlget_noti_data);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$datapath=  $row['notification_data'];
				}
			}


			$arr_data = array(); // create empty array
  	 		$jsondata = file_get_contents($notification_path);
  	 		 $arr_data = json_decode($jsondata, true);
			  // print_r($arr_data);
			   
			   	$fname = $arr_data[First_Name];
			   	$lname = $arr_data[Last_Name];
			   	$phone=$arr_data[Phone];
				$email=$arr_data[Email];
				$password=$arr_data[Password];
				$nid=$arr_data[NID];
				$gender=$arr_data[Gender];



?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>REGISTRATION</b></legend>
</head>

<body>
		<fieldset>
			<center>
				<form method="post" action="farmerRegCheck.php">
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>First Name</td>
							<td>:</td>
							<td><input name="fname" id = "fname" type="text"  value = "<?php echo "$fname" ?>" placeholder="Enter your First Name" onkeyup="fnameCheck()"></td>
							
							<td><img style="visibility:hidden;" id="fnamealt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
							</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Last Name</td>
							<td>:</td>
							<td><input name="lname" id = "lname" type="text" value="" placeholder="Enter your Last Name" onkeyup="lnameCheck()"></td>
								
							<td><img style="visibility:hidden;" id="lnamealt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>

							
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td><input name="phone" id = "num" type="text" value="" placeholder="Atleast 11 digit" onkeyup="numberCheck()"></td>
							
							<td><img style="visibility:hidden;" id="numalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
							
						<tr>
							<td>Password</td>
							<td>:</td>
							<td>
								<input name="password" id="pass" type="password" value="" placeholder="Enter your password" onkeyup="passCheck()">
								<abbr title="Must Be Atleast 6"><b>i</b></abbr>
							</td>
								
							<td><img style="visibility:hidden;" id="passalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Gender</legend>    
									<input name="gender" id="gen" type="radio" value="Male" onclick="genCheck()">Male
									<input name="gender" id="gen" type="radio" value="Female" onclick="genCheck()">Female
									<input name="gender" id="gen" type="radio" value="Other" onclick="genCheck()">Other
								</fieldset>
							</td>
							
							<td><img style="visibility:hidden;" id="genalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td>Location</td>
							<td>:</td>
							<td>
								<input name="location" id="loc" type="text" value="" placeholder="Enter location of the land" onkeyup="locationCheck()">
							</td>
							
							<td><img style="visibility:hidden;" id="localt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td>Area</td>
							<td>:</td>
							<td>
								<input name="area" id="area" type="text" value="" placeholder="Enter area of the land" onkeyup="areaCheck()">
							</td>
							
							<td><img style="visibility:hidden;" id="areaalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td>Land Type</td>
							<td>:</td>
							<td>
								<input name="landtype" id="landtype" type="text" value="" placeholder="Enter land type" onkeyup="landtypeCheck()">
							</td>
							
							<td><img style="visibility:hidden;" id="landtypealt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td>SA DAG</td>
							<td>:</td>
							<td>
								<input name="sa" id="sa" type="text" value="" placeholder="Enter SA DAG of the land" onkeyup="saCheck()">
							</td>
							
							<td><img style="visibility:hidden;" id="saalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td>RS DAG</td>
							<td>:</td>
							<td>
								<input name="rs" id="rs" type="text" value="" placeholder="Enter RS DAG of the land" onkeyup="rsCheck()">
							</td>
							
							<td><img style="visibility:hidden;" id="rsalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td>Mouja</td>
							<td>:</td>
							<td>
								<input name="mouja" id="mouja" type="text" value="" placeholder="Enter mouja of the land" onkeyup="moujaCheck()">
							</td>
							
							<td><img style="visibility:hidden;" id="moujaalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
								
					</table>
						<br/>
						<input type="submit" id="submit" name="submit" value="Submit" disabled="">
				</form>
				
			</center>
			
		</fieldset>
		
		<script>
			var na1 = false;
			var na2 = false;
			var ph = false;
			var pas = false;
			var ge = false;
			var loca = false;
			var ar = false;
			var la_ty = false;
			var sa_da = false;
			var rs_da = false;
			var mou = false;
				
			function fnameCheck(){
				var name1 = document.getElementById('fname').value;
				if(name1 != ""){
					if(name1.length >= 3){
						var alphaexp = /^[a-zA-Z]+$/;
						if(name1.match(alphaexp)){
							//document.getElementById('fnamealt').innerHTML = name1;
							document.getElementById('fnamealt').src = "done.png";
							fnamealt.style.visibility = "visible";
							na1 = true;
						}else{
							document.getElementById('fnamealt').src = "cross.png";
							fnamealt.style.visibility = "visible";
							//errmsg('fnamealt','NO characters');
						}
					}
					else{
						document.getElementById('fnamealt').src = "cross.png";
						fnamealt.style.visibility = "visible";
						//errmsg('fnamealt','Name is too smal');
					}
				}
				else{
					document.getElementById('fnamealt').src = "cross.png";
					fnamealt.style.visibility = "visible";
					//errmsg('fnamealt','Enter name');
				}

			}
				
			function lnameCheck(){
				var name2 = document.getElementById('lname').value;
				if(name2 != ""){
					if(name2.length >= 3){
						var alphaexp = /^[a-zA-Z]+$/;
						if(name2.match(alphaexp)){
						document.getElementById('lnamealt').src = "done.png";
							lnamealt.style.visibility = "visible";
							na2 = true;
							//document.getElementById('lnamealt').innerHTML = name2;
						}
						else{
							document.getElementById('lnamealt').src = "cross.png";
							lnamealt.style.visibility = "visible";
							//errmsg('lnamealt','NO characters');
						}
					}
					else{
						document.getElementById('lnamealt').src = "cross.png";
						lnamealt.style.visibility = "visible";
						//errmsg('lnamealt','Name is too smal');
					}
				}	
				else{
					document.getElementById('lnamealt').src = "cross.png";
					lnamealt.style.visibility = "visible";
					//errmsg('lnamealt','Enter name');
				}

			}
				
			function numberCheck(){
				var num = document.getElementById('num').value;
				if (num != ""){
					if (num.length >= 11){
						if(IsNumber(num)){
							document.getElementById('numalt').src = "done.png";
							numalt.style.visibility = "visible";
							ph = true;
							//document.getElementById('numalt').innerHTML = num;
						}
						else {
							document.getElementById('numalt').src = "cross.png";
							numalt.style.visibility = "visible";
							//errmsg('numalt','it is not a number'); 
						}
					}
					else {
						document.getElementById('numalt').src = "cross.png";
						numalt.style.visibility = "visible";
						//errmsg('numalt','Invalid number');
					}
				}
				else{
					document.getElementById('numalt').src = "cross.png";
					numalt.style.visibility = "visible";
					//errmsg('numalt','Enter phone number');
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
				
				function passCheck(){
					var pass = document.getElementById('pass').value;
					if (pass != ""){
						if (pass.length >= 6){
							document.getElementById('passalt').src = "done.png";
							passalt.style.visibility = "visible";
							pas = true;
							//document.getElementById('passalt').innerHTML = pass;
						}
						else {
							document.getElementById('passalt').src = "cross.png";
							passalt.style.visibility = "visible";
							//errmsg('passalt','Invalid password');
						}
					}
					else{
						document.getElementById('passalt').src = "cross.png";
						passalt.style.visibility = "visible";
						//errmsg('passalt','Enter password');
					}
				}
				
				function genCheck(){
					var gen = document.getElementsByName("gender");
					if(gen[0].checked == true || gen[1].checked == true || gen[2].checked == true){
						document.getElementById('genalt').src = "done.png";
						genalt.style.visibility = "visible";
						ge = true;
						//document.getElementById('genalt').innerHTML = gen;
					}
					else{
						document.getElementById(genalt).src = "cross.png";
						genalt.style.visibility = "visible";
						//errmsg('genalt','please select gender');
					}
				}
				
				
				
				
				
				
				
				
				
				
				
				
				function locationCheck(){
					var loc = document.getElementById('loc').value;
					if (loc != ""){
						if(characters(loc)){
							if(loc.length >= 5){
								document.getElementById('localt').src = "done.png";
								localt.style.visibility = "visible";
								loca = true;
								//document.getElementById('localt').innerHTML = loc;
							}
							else{
								document.getElementById('localt').src = "cross.png";
								localt.style.visibility = "visible";
								//errmsg('localt','Location is too smal');
							}
						}
						else{
							document.getElementById('localt').src = "cross.png";
							localt.style.visibility = "visible";
							//errmsg('localt','Not valid');
						}
					}
					else{
						document.getElementById('localt').src = "cross.png";
						localt.style.visibility = "visible";
						//errmsg('localt','Enter location');
					}
				}
				
				function characters(loc){
					var n = true;
					for(var i=0; i<loc.length; i++){
						if(loc[i] != '!' && loc[i] != '@' && loc[i] != '#' && loc[i] != '$' && loc[i] != '%' && loc[i] != '^' && loc[i] != '&' && loc[i] != '*' && loc[i] != '(' && loc[i] != ')' && loc[i] != '-' && loc[i] != '_' && loc[i] != '=' && loc[i] != '+' && loc[i] != '`' && loc[i] != '~' && loc[i] != '[' && loc[i] != '{' && loc[i] != ']' && loc[i] != '}' && loc[i] != '|' && loc[i] != '' && loc[i] != ':' && loc[i] != ';' && loc[i] != ' ' && loc[i] != '<' && loc[i] != '>' && loc[i] != '.' && loc[i] != '?' && loc[i] != '/'){
							if(loc[i]>='a' && loc[i]<='z'){
						n = true;	
						}
					
					}
						else {
							n = false;
							break;
						}
					}
					
					
					if (n == true ){
						return true ;
					}
					else {
						return false ;
					}
								
				}
				
				function areaCheck(){
					var area = document.getElementById('area').value;
					if (area != ""){
						if(IsNumber(area)){
							document.getElementById('areaalt').src = "done.png";
							areaalt.style.visibility = "visible";
							ar = true;
							//document.getElementById('areaalt').innerHTML = area;
						}
						else {
							document.getElementById('areaalt').src = "cross.png";
							areaalt.style.visibility = "visible";
							//errmsg('areaalt','it is not a number'); 
						}
					}
					else{
						document.getElementById('areaalt').src = "cross.png";
						areaalt.style.visibility = "visible";
						//errmsg('areaalt','Enter area');
					}
				}
				
				function landtypeCheck(){
					var landtype = document.getElementById('landtype').value;
					if(landtype != ""){
						if(landtype.length >= 4){
							var alphaexp = /^[a-zA-Z]+$/;
							if(landtype.match(alphaexp)){
								//document.getElementById('landtypealt').innerHTML = landtype;
								document.getElementById('landtypealt').src = "done.png";
								landtypealt.style.visibility = "visible";
								la_ty = true;
							}else{
								document.getElementById('landtypealt').src = "cross.png";
								landtypealt.style.visibility = "visible";
								//errmsg('landtypealt','NO characters');
							}
						}
						else{
							document.getElementById('landtypealt').src = "cross.png";
							landtypealt.style.visibility = "visible";
							//errmsg('landtypealt','Name is too smal');
						}
					}
					else{
						document.getElementById('landtypealt').src = "cross.png";
						landtypealt.style.visibility = "visible";
						//errmsg('landtypealt','Enter land type');
					}

				}
				
				function saCheck(){
					var sa = document.getElementById('sa').value;
					if (sa != ""){
						if (sa.length >= 2){
							if(IsNumber(sa)){
								document.getElementById('saalt').src = "done.png";
								saalt.style.visibility = "visible";
								sa_da = true;
								//document.getElementById('saalt').innerHTML = sa;
							}
							else {
								document.getElementById('saalt').src = "cross.png";
								saalt.style.visibility = "visible";
								//errmsg('saalt','it is not a number'); 
							}
						}
						else {
							document.getElementById('saalt').src = "cross.png";
							saalt.style.visibility = "visible";
							//errmsg('saalt','Invalid SA number');
						}
					}
					else{
						document.getElementById('saalt').src = "cross.png";
						saalt.style.visibility = "visible";
						//errmsg('saalt','Enter SA number');
					}
				}
				
				function rsCheck(){
					var rs = document.getElementById('rs').value;
					if (rs != ""){
						if (rs.length >= 2){
							if(IsNumber(rs)){
								document.getElementById('rsalt').src = "done.png";
								rsalt.style.visibility = "visible";
								rs_da = true;
								//document.getElementById(rsalt).innerHTML = rs;
							}
							else {
								document.getElementById('rsalt').src = "cross.png";
								rsalt.style.visibility = "visible";
								//errmsg('rsalt','it is not a number'); 
							}
						}
						else {
							document.getElementById('rsalt').src = "cross.png";
							rsalt.style.visibility = "visible";
							//errmsg('rsalt','Invalid SA number');
						}
					}
					else{
						document.getElementById('rsalt').src = "cross.png";
						rsalt.style.visibility = "visible";
						//errmsg('rsalt','Enter SA number');
					}
				}
				
				function moujaCheck(){
					var mouja = document.getElementById('mouja').value;
					if(mouja != ""){
						if(mouja.length >= 3){
							var alphaexp = /^[a-zA-Z]+$/;
							if(mouja.match(alphaexp)){
								//document.getElementById('moujaalt').innerHTML = mouja;
								document.getElementById('moujaalt').src = "done.png";
								moujaalt.style.visibility = "visible";
								mou = true;
								
								if(na1 == true && na2 == true && ph == true && pas == true && ge == true && loca == true && ar == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
									document.getElementById('submit').disabled=false;
								}
								
							}else{
								document.getElementById('moujaalt').src = "cross.png";
								moujaalt.style.visibility = "visible";
								//errmsg('moujaalt','NO characters');
							}
						}
						else{
							document.getElementById('moujaalt').src = "cross.png";
							moujaalt.style.visibility = "visible";
							//errmsg('moujaalt','Mouja is too smal');
						}
					}
					else{
						document.getElementById('moujaalt').src = "cross.png";
						moujaalt.style.visibility = "visible";
						//errmsg('moujaalt','Enter mouja of the land');
					}

				}
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				function errmsg(err,msg){
					var errid=document.getElementById(err);
					errid.innerHTML=msg;
				}
				
				
				
			 
			</script>
		
		
</body>
</html>