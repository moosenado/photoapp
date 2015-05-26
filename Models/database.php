<?php

	$dsn = 'mysql:host=localhost;dbname=photoapp';
	$username = 'root';
	$password = '';

?>

<?php
	class database {
		private $db;

		function __contruct(){
			$this->db = new PDO($dsn, $username, $password);
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


	
?>