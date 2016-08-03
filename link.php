<?php

	//echo "<font color = 'red'>TEST PHP ON WEB</font>";

	$user = 'admin';
	$pass = '000000';
	$host = 'localhost';
	$link = mysql_connect($host, $user, $pass);

	if(!$link)
	{
		die('can not connect to MySQL' . mysql_errno());	
	}

	//echo "Connect to MySQL!! <br>";
	
	$database = "ContactList";
	$db_select = mysql_select_db($database);
	//echo $db_select;

	if(!$db_select)
	{
		die('can not connect to ' . $database . ' ' . mysql_errno());	
	}

?>