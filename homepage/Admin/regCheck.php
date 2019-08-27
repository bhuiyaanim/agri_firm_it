<?php
	error_reporting(0);
	session_start();
	$phoneno=$_SESSION['username'];
	
	if (isset($_POST['submit']))
	{
	
			$fname=trim($_POST['fname']);
			$lname=trim($_POST['lname']);
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			$gender=$_POST['gender'];
			$type=$_POST['type'];
			$nid=$_POST['NID'];
			
			$fnameflag ="";
			$lnameflag ="";
			$emailflag ="";
			$phoneflag ="";
			$passwordflag ="";
			$cpasswordflag ="";
			$genderflag ="";
			$typeflag ="";
			
			
			if($fname =="" ||$phone == "" || $email == "" || $password == "" || $cpassword == "" || $gender == "" || $type == "")
			{
				header("location:reg.php?Null not preferable");
			}
			else
			
			{
				if (ctype_alpha($fname)) 
					{
					$fnameflag ="1";
					}

				if (ctype_alpha($lname)) 
					{
					$lnameflag ="1";
					}	


				if( strlen($phone) >= 11)
				{
					$phoneflag = "1";
				}
				

				$pics_email = explode("@", $email); //Email split
				if($pics_email[0]!="" && $pics_email[1]!="")
				{
					$pics_email2 = explode(".", ($pics_email[1]));	
					if ((strlen($pics_email2[0])< 4)  && (strlen($pics_email2[1])> 2))	
					{
						$emailflag ="1";
					}
				}
				
				if (strlen($password<5)  )
				{
					if(!ctype_alpha($password))
					{
					  $passwordflag="1";
			        }
				}
				
				if ($cpassword == $password)
				{
					$cpasswordflag="1";
				}
				
				
				$genderflag = "1";
				$typeflag = "1";
				
				if($fnameflag =1 && $lnameflag =1 && $emailflag =1 && $phoneflag =1 && $passwordflag =1 && $cpasswordflag =1 && $genderflag =1 &&	$typeflag =1)
				{
					

					$conn = mysqli_connect('', 'root', '', 'agrofirmit');

						if(!$conn){
							echo "DB Error: ".mysqli_connect_error();
						}
						else
						{
							
							
							$sql = "UPDATE `userreg` SET `firstname`='$fname',`lastname`='$lname',`phone`='$phone',`email`='$email',`password`='$password',`gender`='$gender',`type`='$type',`NID`='nid' WHERE `phone`='$phoneno'";

						$result = mysqli_query($conn, $sql);
						
							header("location: ./AdminDashboard.php?UPDATED");
						
							mysqli_close($conn);
						
										
						}

					
					
				}
							
			} //else ending
			
	} //isset ending
	
	else
	{
		echo "Invalid request";
	}
	
?>