<?php
	error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	
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
</head>
<body>
	<legend><b>REGISTRATION</b></legend>


		<fieldset>
			<center>
				<form method="post" action="farmerRegCheck.php">
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>First Name</td>
							<td>:</td>
							<td><input name="fname" id = "fname" type="text" placeholder="Enter your First Name" onkeyup="fnameCheck()"></td>
							
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
					<td>NID</td>
					<td>:</td>
					<td>
						<input name="nid" id="nid" type="text" value="" placeholder="NID 13 digit " onkeyup="nidCheck()">
						<abbr title="Must Be 13"><b>i</b></abbr>
					</td>
						
					<td><img style="visibility:hidden;" id="nidalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>


						<tr>
							<td>Location</td>
							<td>:</td>
							<td>
								<input name="location" id="loc" type="text" value="" placeholder="Enter location of the land" onkeyup="">
							</td>
							
							<td><img style="visibility:hidden;" id="localt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						
						<tr>
							<td>Area</td>
							<td>:</td>
							<td>
								<input name="area" id="area" type="text" value="" placeholder="Enter area of the land" onkeyup="">
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
							document.getElementById('fnamealt').src = "done.png";
							fnamealt.style.visibility = "visible";
							na1 = true;
							
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
						
						}
						else{
							document.getElementById('fnamealt').src = "cross.png";
							fnamealt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else{
						document.getElementById('fnamealt').src = "cross.png";
						fnamealt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('fnamealt').src = "cross.png";
					fnamealt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
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
							
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
							
						}
						else{
							document.getElementById('lnamealt').src = "cross.png";
							lnamealt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else{
						document.getElementById('lnamealt').src = "cross.png";
						lnamealt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}	
				else{
					document.getElementById('lnamealt').src = "cross.png";
					lnamealt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
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
				
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
							
						}
						else {
							document.getElementById('numalt').src = "cross.png";
							numalt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else {
						document.getElementById('numalt').src = "cross.png";
						numalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('numalt').src = "cross.png";
					numalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
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
					
						if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
							
					}
					else {
						document.getElementById('passalt').src = "cross.png";
						passalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('passalt').src = "cross.png";
					passalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
				}
			}

			function nidCheck(){
			var nid = document.getElementById('nid').value;
			if (nid != ""){
				if (nid.length = 13){
					document.getElementById('nidalt').src = "done.png";
					nidalt.style.visibility = "visible";
					nid = true;
					//document.getElementById('passalt').innerHTML = pass;
					
					if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
					
				}
				else {
					document.getElementById('nidalt').src = "cross.png";
					passalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
					//errmsg('passalt','Invalid password');
				}
			}
			else{
				document.getElementById('nidalt').src = "cross.png"; 
				passalt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
				//errmsg('passalt','Enter password');
			}
		}
				
			function genCheck(){
				var gen = document.getElementsByName("gender");
				if(gen[0].checked == true || gen[1].checked == true || gen[2].checked == true){
					document.getElementById('genalt').src = "done.png";
					genalt.style.visibility = "visible";
					ge = true;
					
					if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
						
				}
				else{
					document.getElementById(genalt).src = "cross.png";
					genalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
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
			
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
								
						}
						else{
							document.getElementById('localt').src = "cross.png";
							localt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else{
						document.getElementById('localt').src = "cross.png";
						localt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('localt').src = "cross.png";
					localt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
				}
			}
				
			function characters(loc){
				var n = true;
				for(var i=0; i<loc.length; i++){
					if(loc[i] != '!' && loc[i] != '@' && loc[i] != '#' && loc[i] != '$' && loc[i] != '%' && loc[i] != '^' && loc[i] != '&' && loc[i] != '*' && loc[i] != '(' && loc[i] != ')' && loc[i] != '-' && loc[i] != '_' && loc[i] != '=' && loc[i] != '+' && loc[i] != '`' && loc[i] != '~' && loc[i] != '[' && loc[i] != '{' && loc[i] != ']' && loc[i] != '}' && loc[i] != '|' && loc[i] != '' && loc[i] != ':' && loc[i] != ';' && loc[i] != ' ' && loc[i] != '<' && loc[i] != '>' && loc[i] != '.' && loc[i] != '?' && loc[i] != '/'){
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
				
			function areaCheck(){
				var area = document.getElementById('area').value;
				if (area != ""){
					if(IsNumber(area)){
						document.getElementById('areaalt').src = "done.png";
						areaalt.style.visibility = "visible";
						ar = true;
							
						if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
						
					}
					else {
						document.getElementById('areaalt').src = "cross.png";
						areaalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('areaalt').src = "cross.png";
					areaalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
				}
			}
			
			function landtypeCheck(){
				var landtype = document.getElementById('landtype').value;
				if(landtype != ""){
					if(landtype.length >= 4){
						var alphaexp = /^[a-zA-Z]+$/;
						if(landtype.match(alphaexp)){
							document.getElementById('landtypealt').src = "done.png";
							landtypealt.style.visibility = "visible";
							la_ty = true;
							
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
							
						}else{
							document.getElementById('landtypealt').src = "cross.png";
							landtypealt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else{
						document.getElementById('landtypealt').src = "cross.png";
						landtypealt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('landtypealt').src = "cross.png";
					landtypealt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
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
								
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
								
						}
						else {
							document.getElementById('saalt').src = "cross.png";
							saalt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else {
						document.getElementById('saalt').src = "cross.png";
						saalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('saalt').src = "cross.png";
					saalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
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
								
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
								
						}
						else {
							document.getElementById('rsalt').src = "cross.png";
							rsalt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else {
						document.getElementById('rsalt').src = "cross.png";
						rsalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
						
					}
				}
				else{
					document.getElementById('rsalt').src = "cross.png";
					rsalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
				}
			}
				
			function moujaCheck(){
				var mouja = document.getElementById('mouja').value;
				if(mouja != ""){
					if(mouja.length >= 3){
						var alphaexp = /^[a-zA-Z]+$/;
						if(mouja.match(alphaexp)){
							document.getElementById('moujaalt').src = "done.png";
							moujaalt.style.visibility = "visible";
							mou = true;
								
							if(na1 == true && na2 == true && ph == true && pas == true && ge == true && la_ty == true && sa_da == true && rs_da == true && mou == true){
								document.getElementById('submit').disabled=false;
							}
							
						}else{
							document.getElementById('moujaalt').src = "cross.png";
							moujaalt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
						}
					}
					else{
						document.getElementById('moujaalt').src = "cross.png";
						moujaalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
					}
				}
				else{
					document.getElementById('moujaalt').src = "cross.png";
					moujaalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
				}
				
			}
				
				
			 
		</script>
		
		
</body>
</html>