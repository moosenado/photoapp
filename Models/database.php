<?php
	$dsn = 'mysql:host=localhost;dbname=photoapp';
	$username = 'root';
	$password = 'brent232';

	try{
		$db = new PDO($dsn, $username, $password);
	}
	catch (PDOException $e){
		$error_message = $e->getMessage();
		include('database_error.php');
		exit();
	}

?>