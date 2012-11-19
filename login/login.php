<?php
	include("db.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// username and password sent from Form
		$username=mysql_real_escape_string($_POST['username']);
		$password=mysql_real_escape_string($_POST['password']);
		$password=md5($password); // Encrypted Password
		
		// table to connect to
		$table = "users"; 
		
		$sql="SELECT * FROM $table WHERE username='$username' and password='$password'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);

		// If result matched $username and $password, table row must be 1 row
		if($count==1)
		{
			// save login timestamp
			$insert_sql="UPDATE users SET last_signin_datetime=NOW() WHERE username='$username'";
			$insert_result=mysql_query($insert_sql);
			
			// store session variables
			$_SESSION['sessionid'] = $username + time(); 
			
			$row = mysql_fetch_array($result);
			
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			
			header("location: ../index.php");
		}
		else 
		{
			header("location: ../fail-log.php");
		}
	}
?>

