<?php

require('../Models/users_db.php');

if(isset($_POST['action'])){
	$action = $_POST['action'];
} else{
	$action = 'home';
}

if($action =='home'){
	include('../view/home.php');

} elseif ($action=='login') {
	session_start();
	$user = new users();

	if($_POST && !empty($_POST['username']) && !empty($_POST['password'])){
		$response = $user->validate_user($_POST['username'], $_POST['password']);
	}

} else if($action=='register'){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$uName = $_POST['userName'];
		$pwd = $_POST['password'];
		$pwdC = $_POST['passwordC'];
		$email = $_POST['email'];
		$date = date('y-m-d');

		if($pwd!==$pwdC){
			$error_message =  "password does not match";
			header("location: ../view/home.php");
		} else{
			$user = new users();
			$user->add_user($firstName, $lastName, $uName, $pwd, $email, $date);
			header("location: ../view/main.php");
		}

		
		
}

?>
