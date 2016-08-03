
<html>

	<head>
		<meta charset="utf-8">
		<title>UserAdmin</title>
		
		<link rel="stylesheet" href="css/reset.css">    
        <link rel="stylesheet" href="css/style.css">
	</head>

	<body>
	
		<h1>Register</h1>
		
	    <form action="adduser.php" method="POST">
	    	<table >
	    		
	    		<tr>
			      	<td>User Name</td>
			      	<td><input name='username'></td>
			    </tr>
			    <tr>
			      	<td>Password</td>
			      	<td><input name='password'></td>
			    </tr>
			    <tr>
			      	<td>Phone</td>
			      	<td><input name='phone'></td>
			    </tr>
			   	<tr>
			      	<td>Email</td>
			      	<td><input name='email'></td>
			    </tr>
			    <tr>
			      	<td>Facebook</td>
			      	<td><input name='facebook'></td>
			    </tr>
			    <tr>
			      	<td>Line</td>
			      	<td><input name='line'></td>
			    </tr>

		    </table>
		    	<p></p>
		    	<button type="submit" >Register</button>		    	
		    	<button type="submit" name="login" value="1">back to Login</button>
	    </form>
	</body>

</html>




