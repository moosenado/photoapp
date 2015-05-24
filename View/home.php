<!DOCTYPE HTML>
<html>
	<?php require('header.php'); ?>
		<main>
		<h1>Welcome to photoApp</h1>
		
	<form action = "../controller/index.php" method = "post">
		<fieldset>
		<legend>Log In</legend>
			<label>User Name</label>
			<input type = "text" name = 'username'>
			<br>

			<label>Password</label>
			<input type = "password" name = "password">
			<br>

			<input type='hidden' name='action' value='login'>

			<input type = "submit" value="Log In">
		</fieldset>
	</form>
	<br>
	<form action = "../controller/index.php" method = "post">
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

			<input type = "hidden" name='action' value = 'register'>

			<input type = "Submit" value = "Register">
		</fieldset>
	</form>

	<?php
		if(!empty($error_message)){?>
			<p class="error"><?php echo $error_message; ?></p>
	<?php } ?>

	<?php require('footer.php'); ?>
	</main>



	</body>
</html>