<?php
require ('database.php');

class users {

	function add_user($firstName, $lastName, $uName, $pwd, $email, $date){
		$database = database::connectDB();
		$query = "INSERT INTO users
				(firstName, lastName, userName, password, email, createDate )
			   VALUES
			   	('$firstName', '$lastName', '$uName', '$pwd', '$email', '$date')";
		$database->exec($query);
}

	function validate_user($uName, $pwd){
		$database = database::connectDB();
		$ensure_user = verify_username_pass($uName, $pwd);

		if($ensure_user){
			$_SESSION['status'] = 'authorised';
			header("location: ../view/main.php");
		} else return "please enter a correct username and password";

	}

	function verify_username_pass($uName, $pwd){
		
			$query = "SELECT * FROM users WHERE username = ? and password = ? LIMIT 1";

			if($stmt = $this->db->prepare($query)){
				$stmt->bind_param('ss', $uName, $pwd);
				$stmt->execute();

				if($stmt->fetch()){
					$stmt->close();
					return true;
				}
			}
		}

}
//40:00
?>