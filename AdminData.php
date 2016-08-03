<?php

	include('linkdb.php');
	
	$userID = $_SESSION["pri"];
	$selUser = $_POST["user"];	// from checkbox
	
	//print_r($selUser)."<br>";;
	$n = count($selUser);
	$addToList = $_POST["addToList"];
	//echo $addToList."<br>";
	$delData = $_POST["DelData"];
	//echo $delData."<br>";
	
	if( $addToList == "1" )
	{
		echo "add to list <br>";
		for( $i=0; $i<$n; $i++ )
		{
			$contactID = $selUser[$i];
			
			$setSQL = "INSERT INTO `mylist`(`userID`, `contactID`) VALUES (". $userID . ",'". $contactID . "')";
			
			echo $setSQL."<br>";
			mysql_query($setSQL);
		}
	}
	
	//Users cannot delete from full contacts
	if( $delData == "0" )
	{	

	}


	mysql_close($link);

?>

		<script type='text/javascript'>
	//		window.location.href='showAllData.php'
		</script>