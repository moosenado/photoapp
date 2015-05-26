<?php
require 'datebase.php';

class users {

	function add_user($firstName, $lastName, $userName, $password, $email, $date){
	$database = new database();
	$query = "INSERT INTO users
				(firstName, lastName, userName, password, email, createDate )
			   VALUES
			   	('$firstName', '$lastName', '$userName', '$password', '$email', '$date')";
	$database->exec($query);
}

	function validate_user($username, $password){
		$datebase = new database();
		$ensure_user = $database->verify_username_pass($username, md5($password));

		if($ensure_user){
			$_SESSION['status'] = 'authorised';
			header("location: ../view/main.php");
		} else return "please enter a correct username and password";

	}

}

?>