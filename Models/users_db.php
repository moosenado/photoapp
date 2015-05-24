<?php

function add_user($firstName, $lastName, $userName, $password, $email, $date){
	global $db;
	$query = "INSERT INTO users
				(firstName, lastName, userName, password, email, createDate )
			   VALUES
			   	('$firstName', '$lastName', '$userName', '$password', '$email', '$date')";
	$db->exec($query);
}

function user_exists($userName, $password){
	global $db;
	
}

?>