<?php

	include('linkdb.php');

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$facebook = $_POST["facebook"];
	$line = $_POST["line"];
	$tag = $_POST["tag"];

	$getAllrowsSQL = "SELECT COUNT(*) FROM Contacts";
	$runSQL = mysql_query($getAllrowsSQL);
	$Lastrow = mysql_fetch_assoc($runSQL);
	//$newrow = $Lastrow["COUNT(*)"] + 1;
	//$newid = "user". $newrow;

	$sqlCode = "INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `facebook`, `line`, `tag`) VALUES ('', '" . $name . "','" . $phone . "', '" . $email . "', '" . $facebook . "', '" . $line . "', '" . $tag . "')";

	mysql_query($sqlCode);

	$setSQL = "INSERT INTO `mylist` (`userID`, `contactID`) VALUES (" .$_SESSION["pri"]. ", '" . $newid . "')";
	mysql_query($setSQL);
	mysql_close($link);
?>

	<script type='text/javascript'>
		window.location.href='addcontactFront.php'
	</script>