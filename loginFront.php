
<html>

	<head>
		<meta charset="utf-8">
		<title>Login</title>
		
		<link rel="stylesheet" href="css/reset.css">    
        <link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<h1>Login</h1>
	    <form action="login.php" method="POST">
	    <br>
	    	<table border= 0 color='black' size=100 width="500">
	    		<tr>
			      	<td>User Name</td>
			      	<td><input name='username'></td>
			    </tr>
			    <tr>
			      	<td>Password</td>
			      	<td><input name='password'></td>
			    </tr>
		    </table>
		    	<button type="submit" name="login" value="0">Login</button>
		    	<button type="submit" name="addNewAccount" value="1">Sign Up</button>
	    </form>

	    <?php 
			$loginResult = $_GET["loginresult"];
			if( $loginResult == 1 )
			{	
				echo "<br>";
				echo "<div class=\"logfail\">Login Failed, please try again.</div>";
			}
		?>
	</body>

</html>




