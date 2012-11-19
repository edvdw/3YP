<?php
	include("db.php");
	if(isSet($_POST['username']))
	{
		$username = $_POST['username'];
		$sql_check = mysql_query("SELECT username FROM $table WHERE username='".$username."'") or die(mysql_error());

		if(mysql_num_rows($sql_check))
		{
			echo '<font color="red">The username <STRONG>'.$username.'</STRONG> is already in use.</font>';
		}
		else
		{
			echo 'OK';
		}
	}
?>
