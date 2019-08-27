<?php
	error_reporting(0);
	
	if (isset($_POST['submit']))
	{
	
			$fname=trim($_POST['fname']);
			$lname=trim($_POST['lname']);
			$phone=trim($_POST['phone']);
			$email=trim($_POST['email']);
			$password=trim($_POST['password']);
			$cpassword=trim($_POST['cpassword']);
			$nid=trim($_POST['nid']);
			$gender=$_POST['gender'];

			

			$fnameflag ="";
			$lnameflag ="";
			$emailflag ="";
			$phoneflag ="";
			$passwordflag ="";
			$cpasswordflag ="";
			$nidflag ="";
			$genderflag ="";
			
			
			if($fname =="" ||$phone == "" || $email == "" || $password == "" || $cpassword == "" || $nid == "" || $gender == "")
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
				
				if (strlen($password > 5)  )
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
				
				if ($nid == 17)
				{
					$nidflag="1";
				}
				
				
				$genderflag = "1";
				
				if($fnameflag =1 && $lnameflag =1 && $emailflag =1 && $phoneflag =1 && $passwordflag =1 && $cpasswordflag =1 &&	$nidflag =1 && $genderflag =1)
				{
					$filename=$fname."_".$lname."_".$phone.".json";
					$user_data = array('First_Name'=> $fname, 'Last_Name'=> $lname,'Phone'=> $phone,'Email'=> $email,'Password'=> $password,'NID'=> $nid,'Gender'=> $gender);
					//$response['Agri_IT_Reg'] = $user_data;
					$myfile = fopen($filename, "a");
					fwrite($myfile, json_encode($user_data));
					fclose($myfile);



					$filepath="http://localhost:85/final_project/homepage/Agri.FirmIT_agent/"."$filename";

					$conn = mysqli_connect('', 'root', '', 'agrofirmit');

						if(!$conn){
							echo "DB Error: ".mysqli_connect_error();
						}
						else
						{
							$sql = "INSERT INTO `agrifarmit_notification`(`notification_id`, `notification_data`) VALUES ('','$filepath')";
							$result = mysqli_query($conn, $sql);
							
							echo "DONE";
							//header("location: ../login/Login.php");
						
							mysqli_close($conn);				
						}



					
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
	
?>