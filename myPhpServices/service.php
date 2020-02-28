<?php

	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "dzhealth";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		//echo "connection is done";
		
	} catch (PDOException $e) {
		echo "problem de connexion ". $e->getMessage();
	}

?>