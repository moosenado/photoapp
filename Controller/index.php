<?php
require('../Models/database.php');
require('../Models/users_db.php');

var_dump($_POST);
exit();
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
		$email = $_POST['email'];

		$date = date('y-m-d');

		add_user($firstName, $lastName, $userName, $password, $email, $date);
		include('../view/main.php');

}

?>
