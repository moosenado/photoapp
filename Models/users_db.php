<?php
require ('database.php');

class users {

	function add_user($firstName, $lastName, $uName, $pwd, $email, $date){
		var_dump("hey");
		exit();
		$database = new database();
		$query = "INSERT INTO users
				(firstName, lastName, userName, password, email, createDate )
			   VALUES
			   	('$firstName', '$lastName', '$uName', '$pwd', '$email', '$date')";
		$database->exec($query);
}

	function validate_user($uName, $pwd){
		$database = new database();
		$ensure_user = $database->verify_username_pass($uName, md5($pwd));

		if($ensure_user){
			$_SESSION['status'] = 'authorised';
			header("location: ../view/main.php");
		} else return "please enter a correct username and password";

	}

}
//40:00
?>