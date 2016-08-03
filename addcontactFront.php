
<html>

	<head>
		<meta charset="utf-8">
		<title>Connect</title>
		
		<link rel="stylesheet" href="css/reset.css">    
        <link rel="stylesheet" href="css/style.css">
	</head>

	<body>
	
		<?php include('menu.php'); ?>
		
		<h1>Add new contacts</h1>
		
		<?php include('linkdb.php') ?>
		
	    <form action="addcontact.php" method="POST">
	    	<table border= 0 color='black' size=100 width="500">
	    		<tr>
			      	<td>Name</td>
			      	<td><input name='name'></td>
			    </tr>
			    <tr>
			      	<td>Phone</td>
			      	<td><input name='phone'></td>
			    </tr>
			    <tr>
			      	<td>E-mail</td>
			      	<td><input name="email"></td>
			    </tr>
			    <tr>
			      	<td>Facebook</td>
			      	<td><input name="facebook"></td>
			    </tr>
			    <tr>
			      	<td>Line</td>
			      	<td><input name="line"></td>
			    </tr>
			    <tr>
			      	<td>Tag</td>
			      	<td><input name="tag"></td>
			    </tr>
		    </table>
		    	<p></p>
		    	<button type="submit" >Add Contact</button>
	    </form>
	</body>

</html>




