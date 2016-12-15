<!DOCTYPE html>
<!--Creates the customer login page. Info posted here
will be sent to customerconfirm.php to check credentials.-->
<html>
	<body>
	
		<h1>Customer Login </h1>
		<form method="POST" action="customerconfirm.php">
		<h4>Username:</h4>
		<input type="text" name="username" required><br>
		<h4>Password:</h4>
		<input type="password" name="pass" required><br><br>
		<input id="button" type="submit" name="submit" value="Login">
		</form>
                <p><a href="../index.html">Return to Index</a></p>
	</body>

</html>