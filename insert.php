

<?php

	if(isset($_POST['submit'])){
		include "database_connect.php";
		$fname = $_POST['firstname'];
		$mname = $_POST['middlename'];
		$lname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];


		$hashpass = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO system_admin (firstname,middlename,lastname,username,password) VALUES('$fname','$mname','$lname','$username','$hashpass');";
		if($conn->exec($sql));
	}