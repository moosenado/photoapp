<?php
	class database {
		private $db;

		private $dsn = 'mysql:host=localhost;dbname=photoapp';
		private $username = 'root';
		private $password = '';

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