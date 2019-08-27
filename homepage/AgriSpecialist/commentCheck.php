<?php

	error_reporting (0);
	session_start();
	
	$myfile = fopen("../../reginfo.txt", 'r');
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
		else if(isset($_SESSION['username'])){
			if (($_SESSION['type']) == "AgriSpecialist")
				{
					$idflag = 1;
				}
		}
	
	}
	
	if($idflag == 1){
		

		if(isset($_POST['submit'])){

			$f_p_name = $_POST['f_p_name'];
			$comment = $_POST['comment'];

			if($f_p_name == "" || $comment == ""){

				//echo "invalid submission";
				header("location: comment.php");

			}else{

				$myfile = fopen("news", 'a');
				$data = $f_p_name."|".$comment."|"."\r\n";
				fwrite($myfile, $data);
				fclose($myfile);
				
				header("location: Specialist_news.php");

			}
		}
	}
	else{
		header("location: ../Login.php?status=invalidrequest");	
	}
?>