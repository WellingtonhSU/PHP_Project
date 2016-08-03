<?php

	include('link.php');

	session_start();
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$pri = $_SESSION["pri"];

	$setSQL = "SELECT COUNT(*) FROM `user` WHERE `pri` = " . $pri;
	$result = mysql_query($setSQL);
	$countresult = mysql_fetch_assoc($result);
	$count = $countresult["COUNT(*)"];

	if( $count != 1 )
	{
		$url = "loginFront.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>"; 
	}
	else
	{
		echo "Hello! ". $username . "<br>";	
	}
?>