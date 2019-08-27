<?php
	error_reporting(0);
	session_start();
	
	$myfile = fopen("../reginfo.txt", 'r');
	$idflag = 0;
	while (!feof($myfile)) 
	{
		$data = fgets($myfile);
		$arr = explode("|", $data);
		if(isset($_SESSION['username'])){
			if($_SESSION['username']== $arr[1]){
				$idflag = 1;
			}
		}
	
	}
	
	if($idflag == 1){
		//echo $_SESSION['username'];

		if (isset($_POST['submit'])){
		
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				$gender=$_POST['gender'];
				$type=$_POST['type'];
				
				$nameflag ="";
				$emailflag ="";
				$phoneflag ="";
				$passwordflag ="";
				$cpasswordflag ="";
				$genderflag ="";
				$typeflag ="";
				
				
				if($name =="" ||$phone == "" || $email == "" || $password == "" || $cpassword == "" || $gender == "" || $type == "")
				{
					echo "null not accecpted" ;
				}
				else
				{
					
					if(($name >= 'a' && $name <= 'z') || ( $name >= 'A' && $name <= 'Z'))			
					{
						$nameflag =1;
					}
					else
					{
						echo "invalid name";
					}
					
					if(($phone >= '0' && $phone <= '9') && ( strlen($phone) >= 11))
					{
						$passwordflag = 1;
					}
					else
					{
						echo "invalid Password";
					}

					$pics_email1 = explode("@", $email); //Email split
					if($pics_email[0]!="" && $pics_email[1]!="")
					{
						$pics_email2 = explode(".", ($pics_email[1]));	
						if ((strlen($pics_email2[0])< 4)  && (strlen($pics_email2[1])> 2))	
						{
							$emailflag =1;
						}
					}
					
					if (strlen($password>=6))
					{
						
						$passwordflag=1;
					}
					else 
					{
						echo " pls set valid Password and atlest 6 charecter must be taken   ";
					}
					
					if ($cpassword == $password)
					{
						$cpasswordflag=1;
					}
					else 
					{
						echo "Dosn't match the confirm password";
					}
					
					$genderflag = 1;
					$typeflag = 1;
					
					if($nameflag =1 && $emailflag =1 && $phoneflag =1 && $passwordflag =1 && $cpasswordflag =1 && $genderflag =1 &&	$typeflag =1)
					{
						$regfile = fopen("reginfo.txt", "a");
						$datainfo= $name."|".$phone."|".$email."|".$password."|".$gender."|".$type."|"."\n";	
						fwrite($regfile, $datainfo);
						fclose($regfile);
						header("location: ../Login.php");
					}
					else
					{
						header("location: registration.php?status=All cretientials are not ok!!");
					}
					
					
				} //else ending
				
		} //isset ending
		
		else
		{
			echo "Invalid request";
		}
	}
	
	else{
		header("location: ../Login.php?status=invalidrequest");
	}
	
?>