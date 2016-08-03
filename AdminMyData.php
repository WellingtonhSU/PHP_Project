<?php

	include('linkdb.php');
	
	$userID = $_SESSION["pri"];
	$selUser = $_POST["user"];	// from checkbox
	
	//print_r($selUser);
	
	$n = count($selUser);
	$Remove = $_POST["Remove"];
	
	//echo $delData."<br>";

	if( $Remove == "0" )
	{
		//echo "add to list <br>";
		for( $i=0; $i<$n; $i++ )
		{
			$contactID = $selUser[$i];
			$setSQL = "DELETE FROM `mylist` WHERE `userID` =" . $userID . " AND `contactID` = '" . $contactID . "'";
			
			//echo $setSQL."<br>";
			mysql_query($setSQL);
		}
	}

	mysql_close($link);

?>
		<script type='text/javascript'>
			window.location.href='showMyData.php'
		</script>