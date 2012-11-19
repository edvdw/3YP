<?php
	$mysql_hostname = "ramen.cs.man.ac.uk";
	$mysql_user = "vandere9";
	$mysql_password = "1234Abcd";
	$mysql_database = "S09_vandere9";
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
	mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
	$table = "users";
?>
