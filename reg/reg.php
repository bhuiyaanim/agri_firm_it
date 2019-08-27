<?php
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>REGISTRATION</b></legend>
	
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
	
		<form method="post" action="regCheck.php">
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
					<td>Email</td>
					<td>:</td>
					<td>
						<input name="email" id="mail" type="text" value="" placeholder="anyone@gmail.com" onkeyup="mailCheck()">
						<abbr title="hint: sample@example.com"><b>i</b></abbr>
					</td>
					
					<td><img style="visibility:hidden;" id="mailalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
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
					<td>Confirm Password</td>
					<td>:</td>
					<td>
						<input name="cpassword" id="cpass" type="password" value="" placeholder="Re Enter your password" onkeyup="cpassCheck()">
						<abbr title="Must Be Atleast 6"><b>i</b></abbr>
					</td>
					<td><img style="visibility:hidden;" id="cpassalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
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
					<td colspan="3">
						<fieldset>
							<legend>Type</legend>    
							<input name="type" id="type" type="radio" value="Farmer" onclick="typeCheck()">Farmer
							<input name="type" id="type" type="radio" value="AgriSpecialist" onclick="typeCheck()">AgriSpecialist
							<input name="type" id="type" type="radio" value="Company Representative" onclick="typeCheck()">Company Representative
						</fieldset>
					</td>
					
					<td><img style="visibility:hidden;" id="typealt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>
						
			</table>
				<hr/><br/>
				<input type="submit" id="submit" name="submit" value="Submit" disabled="">
				<a href = "../login/Login.php"> Sign In </a>
		</form>
	</center>

	<script>
	
		var na1 = false;
		var na2 = false;
		var ph = false;
		var em = false;
		var pas = false;
		var cpas = false;
		var ge = false;
		var ty = false;
		
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
						
						if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
							document.getElementById('submit').disabled=false;
						}
						
					}else{
						document.getElementById('fnamealt').src = "cross.png";
						fnamealt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
						//errmsg('fnamealt','NO characters');
					}
				}
				else{
					document.getElementById('fnamealt').src = "cross.png";
					fnamealt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
					//errmsg('fnamealt','Name is too smal');
				}
			}
			else{
				document.getElementById('fnamealt').src = "cross.png";
				fnamealt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
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
						
						if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
							document.getElementById('submit').disabled=false;
						}
						
					}
					else{
						document.getElementById('lnamealt').src = "cross.png";
						lnamealt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
						//errmsg('lnamealt','NO characters');
					}
				}
				else{
					document.getElementById('lnamealt').src = "cross.png";
					lnamealt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
					//errmsg('lnamealt','Name is too smal');
				}
			}	
			else{
				document.getElementById('lnamealt').src = "cross.png";
				lnamealt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
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
						
						if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
							document.getElementById('submit').disabled=false;
						}
						
					}
					else {
						document.getElementById('numalt').src = "cross.png";
						numalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
						//errmsg('numalt','it is not a number'); 
					}
				}
				else {
					document.getElementById('numalt').src = "cross.png";
					numalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
					//errmsg('numalt','Invalid number');
				}
			}
			else{
				document.getElementById('numalt').src = "cross.png";
				numalt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
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
		
		function mailCheck(){
			var mail = document.getElementById('mail').value;
			if (mail != ""){
				var mail1 = mail.split('@');
				var alphaexp = /^[a-zA-Z]+$/;
				if (mail1.length == 2){
					var mail2 = mail1[1].split('.');
					if (mail2.length == 2){
						if (mail2[1].length > 0){
							document.getElementById('mailalt').src = "done.png";
							mailalt.style.visibility = "visible";
							em = true;
							//document.getElementById('mailalt').innerHTML = mail;
							
							if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
								document.getElementById('submit').disabled=false;
							}
							
						}
						else{
							document.getElementById('mailalt').src = "cross.png";
							mailalt.style.visibility = "visible";
							document.getElementById('submit').disabled=true;
							//errmsg('ErMail','something not found');
						}
								
					}
					else {
						document.getElementById('mailalt').src = "cross.png";
						mailalt.style.visibility = "visible";
						document.getElementById('submit').disabled=true;
						//errmsg('ErMail','. not found');
					}
				}
				else{
					document.getElementById('mailalt').src = "cross.png";
					mailalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
					//errmsg('ErMail','@ not found');
				}
			}
			else{
				document.getElementById('mailalt').src = "cross.png";
				mailalt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
				//errmsg('mailalt','Enter mail id');
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
					
					if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
						document.getElementById('submit').disabled=false;
					}
					
				}
				else {
					document.getElementById('passalt').src = "cross.png";
					passalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
					//errmsg('passalt','Invalid password');
				}
			}
			else{
				document.getElementById('passalt').src = "cross.png";
				passalt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
				//errmsg('passalt','Enter password');
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
					
					if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
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
		
		
		function cpassCheck(){
			var cpass = document.getElementById('cpass').value;
			if (cpass != ""){
				var pass = document.getElementById('pass').value;
				if (pass == cpass){
					document.getElementById('cpassalt').src = "done.png";
					cpassalt.style.visibility = "visible";
					cpas = true;
					//document.getElementById('cpassalt').innerHTML = cpass;
					
					if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
						document.getElementById('submit').disabled=false;
					}
					
				}
				else {
					document.getElementById('cpassalt').src = "cross.png";
					cpassalt.style.visibility = "visible";
					document.getElementById('submit').disabled=true;
					//errmsg('cpassalt','Password does not match');
				}
			}
			else{
				document.getElementById('cpassalt').src = "cross.png";
				cpassalt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
				//errmsg('cpassalt','ReEnter password');
			}
		}
		
		function genCheck(){
			var gen = document.getElementsByName("gender");
			if(gen[0].checked == true || gen[1].checked == true || gen[2].checked == true){
				document.getElementById('genalt').src = "done.png";
				genalt.style.visibility = "visible";
				ge = true;
				//document.getElementById('genalt').innerHTML = gen;
				
				if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
					document.getElementById('submit').disabled=false;
				}
				
			}
			else{
				document.getElementById(genalt).src = "cross.png";
				genalt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
				//errmsg('genalt','please select gender');
			}
		}
		
		function typeCheck(){
			var type = document.getElementsByName("type");
			if(type[0].checked == true || type[1].checked == true || type[2].checked == true){
				document.getElementById('typealt').src = "done.png";
				typealt.style.visibility = "visible";
				ty = true;
				//document.getElementById('typealt').innerHTML = type;
				
				if(na1 == true && na2 == true && ph == true && em == true && pas == true && cpas == true && ge == true && ty == true){
					document.getElementById('submit').disabled=false;
				}
				
			}
			else{
				document.getElementById('typealt').src = "cross.png";
				typealt.style.visibility = "visible";
				document.getElementById('submit').disabled=true;
				//errmsg('typealt','please select type');
			}
		}
		
		function errmsg(err,msg){
			var errid=document.getElementById(err);
			errid.innerHTML=msg;
		}
		
		
		
	 
	</script> 

	
	
	
</fieldset>


</body>
</html>

