<?php

	session_set_cookie_params(600);
	session_start();
	$_SESSION["username"] = "";
	$_SESSION["password"] = "";
	$_SESSION["pri"] = "";
	session_write_close();

?>

		<script type='text/javascript'>
			window.location.href='loginFront.php'
		</script>