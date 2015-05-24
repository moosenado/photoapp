<!DOCTYPE HTML>
<html>
	<head>
		<title>Login or signup</title>
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>

	<body>
		<main>
		<h1>Welcome to photoApp</h1>
		
	<form action = "../controller/index.php" method = "post" name = 'action' value = 'login'>
		<fieldset>
		<legend>Log In</legend>
			<label>User Name</label>
			<input type = "text" name = "username">
			<br>

			<label>Password</label>
			<input type = "password" name = "pasword">
			<br>

			<input type = "submit" value="Log In">
		</fieldset>
	</form>
	<br>
	<form action = "../controller/index.php" method = "post" name = 'action' value = 'register'>
		<fieldset>
		<legend>Not a Member? Register!</legend>

			<label>First Name</label>
			<input type='text' name = 'firstName'>
			<br>

			<label>Last Name</label>
			<input type = 'text' name = 'lastName'>
			<br>

			<label>User Name</label>
			<input type = "text" name = "userName">
			<br>

			<label>Password</label>
			<input type = "password" name = "password">
			<br>

			<label>Confirm Password</label>
			<input type ="password" name = "passwordC">
			<br>

			<label>E-mail</label>
			<input type = "text" name = "email">
			<br>

			<input type = "Submit" value = "Register">
		</fieldset>
	</form>
	<?php require('footer.php'); ?>
	</main>



	</body>
</html>