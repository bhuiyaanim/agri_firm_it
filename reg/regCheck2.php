<?php
	error_reporting(0);
	require('./fpdf.php');
	
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
			
			$fnameflag ="";
			$lnameflag ="";
			$emailflag ="";
			$phoneflag ="";
			$passwordflag ="";
			$cpasswordflag ="";
			$genderflag ="";
			$typeflag ="";
			$file=$fname.".pdf";
			$myfile = fopen('$file', "w");
			//require('$file');
			
			
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
					$phoneflag = 1;
				}
				

				$pics_email = explode("@", $email); //Email split
				if($pics_email[0]!="" && $pics_email[1]!="")
				{
					$pics_email2 = explode(".", ($pics_email[1]));	
					if ((strlen($pics_email2[0])< 4)  && (strlen($pics_email2[1])> 2))	
					{
						$emailflag =1;
					}
				}
				
				if (strlen($password<5)  )
				{
					if(!ctype_alpha($password))
					{
					  $passwordflag=1;
			        }
				}
				
				if ($cpassword == $password)
				{
					$cpasswordflag=1;
				}
				
				
				$genderflag = 1;
				$typeflag = 1;
				
				if($fnameflag =1 && $lnameflag =1 && $emailflag =1 && $phoneflag =1 && $passwordflag =1 && $cpasswordflag =1 && $genderflag =1 &&	$typeflag =1)
				{
												

						
						
						 
						$pdf=new FPDF();
						$pdf->AddPage();
						$pdf->SetFont('Arial','B',16);
						$pdf->Cell(40,10,'Hello World!');
						$pdf->Output();
						
							

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