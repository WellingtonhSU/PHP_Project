<?php

	$login = $_POST["login"];
	
	if( $login == "1" )
	{
		//$url = "loginFront.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='loginFront.php'";
		echo "</script>";
	}

	include('link.php');

	$username = $_POST["username"];
	$password = $_POST["password"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$facebook = $_POST["facebook"];
	$line = $_POST["line"];


	//Check if user information is already in contact list
	$sqlCode = "SELECT COUNT(*) FROM `contacts` WHERE `name` = '".$username."' AND `phone` = '".$phone."'";
	
	$runSQL = mysql_query($sqlCode);			//Resource id
	$Lastrow = mysql_fetch_assoc($runSQL);		//Array


	//Add this new user into contact list
	if ($Lastrow["COUNT(*)"] == 0)
	{
		$sqlCode = "INSERT INTO `Contacts` (`id`, `name`, `phone`, `email`, `facebook`, `line`) VALUES ('', '" . $username . "','" . $phone . "', '" . $email . "', '" . $facebook . "', '" . $line . "')";
		mysql_query($sqlCode);
	}
	

	//Register user list with contact_id information
	$sqlCode = "SELECT `id` FROM `contacts` WHERE `name` = '".$username."'";
	$arraycontactid = mysql_query($sqlCode);
	$result = mysql_fetch_assoc($arraycontactid);
	$contactid = $result["id"];
	
	$sqlUser = "INSERT INTO `user` (`username`, `password`, `contact_id`) VALUES ('" . $username . "','" . $password . "','". $contactid. "')";
	mysql_query($sqlUser);
	
	
	//Close mysql connection
	mysql_close($link);

?>

	<script type='text/javascript'>
		window.location.href='loginFront.php'
	</script>