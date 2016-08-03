<?php

	include('link.php');

	$signUp = $_POST["addNewAccount"];
	$login = $_POST["login"];
	
	if( $signUp == "1" )
	{
			$url = "adduserFront.php";
			echo "<script type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
	}

	if( $login == "0" )
	{
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sqlCode = "SELECT * FROM `user` WHERE `username` = '".$username."' AND `password` = '".$password."'";
		$result = mysql_query($sqlCode);
		$row = mysql_fetch_assoc($result);
		$pri = $row["pri"];
		//echo $pri;

		//Session start and set cookie 
		if( $pri != "" )
		{
			session_set_cookie_params(600);
			session_start();
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;
			$_SESSION["pri"] = $pri;
			session_write_close();
			$url = "showMyData.php";
			echo "<script type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}

		//else login failed
		else
		{
			$url = "loginFront.php?loginresult=1";
			echo "<script type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}

		mysql_close($link);
	}

?>
