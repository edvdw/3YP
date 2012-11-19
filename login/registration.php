<?php
	include("db.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// username and password sent from Form
		$username=mysql_real_escape_string($_POST['username']); 
		$password=mysql_real_escape_string($_POST['password']);
		$password=md5($password); // Encrypted Password
		$email=mysql_real_escape_string($_POST['email']); 
		$phonenumber=mysql_real_escape_string($_POST['phonenumber']);
		$birthdate=mysql_real_escape_string($_POST['birthdate']);
		$geo_location = "United Kingdom";
		$question=mysql_real_escape_string($_POST['question']);
		$answer=mysql_real_escape_string($_POST['answer']);
		
		$select_sql="SELECT username FROM $table WHERE username='$username'";
		$select_result=mysql_query($select_sql);
		$count=mysql_num_rows($select_result);
		
		if($count==0)
		{
			// select values to input
			$columnnames = "username,password,email,birth_date,geo_location,question,answer,registered_datetime";
			$columnvalues = "'$username','$password','$email','$birthdate','$geo_location','$question','$answer',NOW()";
		
			if(is_null($phonenumber))
			{
				$columnnames .= ",'phonenumber')";
				$columnvalues .= ",$phonenumber)";  
			}
			
			$insert_sql="Insert into $table ($columnnames) values($columnvalues)";
			$insert_result=mysql_query($insert_sql);
		
			if($insert_result==1)
			{
				//$to = $email; 
				//$subject = "Welcome to Computing 101";
				//$body = 'We don\'t have much yet but we are working on it.';
	
				//$headers = '';
	
				//echo $to.'<br>';
				//echo $subjects.'<br>';
				//echo $headers.'<br>';
				//echo $body.'<br>';
	
				//if (mail($to, $subject, $body, $headers))
				//{ 
					header("location: ../index.php");
				//}
				//else
				//{
					// handle email errors
				//}
			}
			else
			{
				header("location: ../register.php?error=404.1");
			}
		}
		else
		{
			header("location: ../register.php?error=404.2");
		}
	}
?>
