<?php
require('../Models/database.php');
require('../Models/users_db.php');

if(isset($_POST['action'])){
	$action = $_POST['action'];
} else{
	$action = 'home';
}

if($action =='home'){
	include('../view/home.php');

} elseif ($action=='login') {
	include('../view/main.php');

} else if($action=='register'){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		$passwordC = $_POST['passwordC'];
		$email = $_POST['email'];
		$date = date('y-m-d');

		if($password!==$passwordC){
			$error_message =  "password does not match";
			include('../view/home.php');
		} else{
			add_user($firstName, $lastName, $userName, $password, $email, $date);
			include('../view/main.php');
		}

		
		
}

?>
