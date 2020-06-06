
<?php
	$server = "localhost";
	$database = "bus_ireserve_final";
	$username = "root";
	$password = "";

	try{
		$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
	}catch(Exception $error){
		echo $error;
	}