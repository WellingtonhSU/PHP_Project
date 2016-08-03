<html>

<title>Contact</title>
	<link rel="stylesheet" href="css/reset.css">    
    <link rel="stylesheet" href="css/style.css">
<head>
<script type="text/javascript">

    function do_this_all()
    {
    	var checkboxes = document.getElementsByName('user[]');
        var button = document.getElementById('delall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = 'TRUE';
		}
    }
    
    function undo_this_all()
    {
    	var checkboxes = document.getElementsByName('user[]');
        var button = document.getElementById('undelall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = '';
		}
    }

</script>
</head>

<body>

<?php include('menu.php'); ?>

<form action="AdminMyData.php" method="post">
<table>
<h1>My Contacts</h1>
<tr>
	<th> Select </th>
	<th> ID </th>
	<th> Name </th>
	<th> Phone </th>
	<th> Email </th>
	<th> Facebook </th>
	<th> Line </th>
	<th> Tag </th>
</tr>


<?php
include('linkdb.php');

//$getCountSQL = "SELECT COUNT(*) FROM `user`";
//$resultCount = mysql_query($getCountSQL);
//$getCount = mysql_fetch_assoc($resultCount);
//$allDataNo = $getCount["COUNT(*)"];

$getIDSQL = "SELECT DISTINCT * FROM `mylist` LEFT JOIN `user` ON `mylist`.`userID` = `user`.`pri` LEFT JOIN `contacts` ON `mylist`.`contactID` = `contacts`.`id` WHERE `mylist`.`userID` =" . $_SESSION["pri"];

$result = mysql_query($getIDSQL);
while( $row = mysql_fetch_assoc($result) )
{
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"user[]\" value=\"" . $row["id"] . "\"/></td>";
	//echo "<td>" . $row["id"] . "</td>";
	echo "<td>" . $row["name"] . "</td>";
	echo "<td>" . $row["phone"] . "</td>";
	echo "<td>" . $row["email"] . "</td>";
	echo "<td>" . $row["facebook"] . "</td>";
	echo "<td>" . $row["line"] . "</td>";
	//echo "<td>" . $row["connect_key"] . "</td>";
	echo "<td>" . $row["tag"] . "</td>";
}


mysql_close($link);
?>

</table>
	<button type="button" id="delall" value="Select All" onClick="do_this_all()" />Select All</button>
	<button type="button" id="undelall" value="Unselect" onClick="undo_this_all()" />Unselect</button>
	<button type="submit" name="Remove" value="0">Remove from my contacts</button>

</form>

</body>
</html>